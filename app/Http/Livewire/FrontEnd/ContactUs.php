<?php

namespace App\Http\Livewire\FrontEnd;

use App\Mail\Frontend\ContactUs as FrontendContactUs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name, $email, $subject, $message;

    /**
     * rules
     *
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        'subject' => ''
    ];

    /**
     * submit
     *
     * @return void
     */
    public function submit()
    {
        $contact = $this->validate();
        $contact_email = DB::table('site_settings')
            ->pluck('contact_us_email')
            ->first();
        Mail::to($contact_email)->send(new FrontendContactUs($contact));
        $this->reset();
        session()->flash('success', 'Your message send successfully');
        $this->dispatchBrowserEvent('hide-notification');
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.front-end.contact-us');
    }
}
