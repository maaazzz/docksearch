<?php

namespace App\Http\Controllers\FrontEnd;
use App\User;
use App\Models\Dock;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use App\Mail\User\ToUser;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Mail\User\ToAdmin;
use Illuminate\Support\Facades\Mail;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use App\Models\Payment as PaymentModel;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    private $_api_context;
    public function __construct()
    {
        $keys = SiteSetting::select('paypal_secret_key','paypal_public_key','mode')->first();
        $paypal_configuration = Config::get('paypal');
        $paypal_configuration['client_id'] = $keys->paypal_public_key;
        $paypal_configuration['secret'] = $keys->paypal_secret_key;
        $paypal_configuration['settings']['mode'] = $keys->mode;
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }
    public function index()
    {
        $id = auth()->user()->id;
        $dockListings = Dock::with('user','payment')
                ->where('user_id',$id)
                ->where('dock_status',1)
                ->get();
        return view('front-end.pages.user-profile',compact('dockListings'));
    }

    public function payWithPaypal(Request $request)
    {

        //validations
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'marine_name' =>'required',
            'list_type' => 'required',
            'dock_country' => 'required',
            'dock_state' => 'required',
            'dock_city' => 'required',
            'address_one' => 'required',
            'address_two' =>'required',
            'postal_code' => 'required',
            'dock_description' =>'required',
            'location_type' =>'required',
            'dock_type' =>'required',
            'boat_length' =>'required',
            'boat_width' =>'required',
            'boat_depth' => 'required',
            'max_clearance' =>'required',
        ]);
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $images[]=$name;
            }
        }

        $dock_attributes = $request->input('dock_attributes');
       $dock = Dock::create([
            'user_id' => auth()->user()->id ?? 1,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'alternate_phone' => $request->alternate_phone,
            'marine_name' => $request->marine_name,
            'list_type' => $request->list_type,
            'price' => $request->flat_price,
            'price_for_rent' => $request->foot_per_month,
            'dock_country' => $request->dock_country,
            'dock_state' => $request->dock_state,
            'dock_city' => $request->dock_city,
            'dock_address_one' => $request->address_one,
            'dock_address_two' => $request->address_two,
            'international' => $request->international,
            'zip_code' => $request->postal_code,
            'dock_description' => $request->dock_description,
            'location_type' => $request->location_type,
            'dock_type' => $request->dock_type,
            'max_length' => $request->boat_length,
            'max_width' => $request->boat_width,
            'max_draw' => $request->boat_depth,
            'max_height' => $request->max_clearance,
            'dock_attributes' => implode(',',$dock_attributes),
            'web_page' => $request->web_page ?? '',
            'dock_status' => 0,
            'is_featured' => 0,
            'images'=>  implode("|",$images),
            'county' => $request->county,
        ]);
        session()->put('dock_id',$dock->id);
        session()->put('payment_plan',$request->payment_plan);
        // dd('payment_plan');
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();
        if ($request->payment_plan == 'basic_listing') {
            $item_1->setName('Basic Listing')
                ->setCurrency('USD')
                ->setQuantity(1)
                ->setPrice(49.95);

            $amount = new Amount();
            $amount->setCurrency('USD')
                ->setTotal(49.95);
            $item_list = new ItemList();
            $item_list->setItems(array($item_1));
            $transaction = new Transaction();
            $transaction->setAmount($amount)
                ->setItemList($item_list)
                ->setDescription('Enter Your transaction description');
        }
        if ($request->payment_plan == 'featured_listing') {
                $item_1->setName('Featured Listing')
                    ->setCurrency('USD')
                    ->setQuantity(1)
                    ->setPrice(74.95);
                    // dd($item_1);
                $amount = new Amount();
                $amount->setCurrency('USD')
                    ->setTotal(74.95);
                $item_list = new ItemList();
                $item_list->setItems(array($item_1));
                $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Enter Your transaction description');

        }
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status'))
            ->setCancelUrl(URL::route('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (Config::get('app.debug')) {
                Session::put('error', 'Connection timeout');
                return Redirect::route('user.profile');
            } else {
                Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('user.profile');
            }
        }

        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        Session::put('paypal_payment_id', $payment->getId());
        // dd(session('paypal_payment_id'));

        if (isset($redirect_url)) {
            return Redirect::away($redirect_url);
        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::route('user.profile');





    }

    public function getPaymentStatus(Request $request)
    {
        // dd($request->all());
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');

        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            Session::put('error','Payment failed');
            return Redirect::route('user.profile');
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            Session::put('success','Payment success !!');
            // payment model as PaymentModel
            $payment = new PaymentModel;
            $payment->user_id = 1;
            $payment->dock_id = session()->get('dock_id');
            $payment->payer_id = $request->paymentId;
            $payment->plan = session()->get('payment_plan');
            $payment->save();

            // update dock status
            $id = session()->get('dock_id');
            $dock = Dock::findOrFail($id);
            $dock->dock_status = 1;
            $dock->is_featured = session()->get('payment_plan') == 'basic_listing' ? 0 : 1;
            $dock->update();

            // send mail
            $email = auth()->user()->email;
            $user = auth()->user();
            Mail::to($email)->send(new ToUser($user));

            Mail::to('maazktk588@gmail.com')->send(new ToAdmin($user));

            session()->forget('dock_id');
            session()->forget('payment_plan');
            return Redirect::route('user.profile');
        }

        Session::put('error','Payment failed !!');
		return Redirect::route('user.profile');
    }

}
