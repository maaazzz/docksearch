<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ReviewSection;
use App\Models\DockShopSection;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.settings.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * allRentList
     *
     * @return void
     */
    public function allRentList()
    {
        return view('admin.settings.all-rentlist-settings');
    }

    /**
     * editRentList
     *
     * @param  mixed $list
     * @return void
     */
    public function editRentList(DockShopSection $list)
    {
        return view('admin.settings.edit-rent-list-settings', compact('list'));
    }

    /**
     * updateRentList
     *
     * @param  mixed $request
     * @param  mixed $list
     * @return void
     */
    public function updateRentList(Request $request, DockShopSection $list)
    {
        $request->validate([
            'header' => 'required',
            'description' => 'required',
            'photo' => 'required|image',
        ]);
        try {
            $list->header = $request->header;
            $list->description = $request->description;
            $list->link_text = $request->link_text;
            $list->redirect_link = $request->redirect_link;
            if ($request->has('photo')) {
                $path = $request->file('photo')->store('website', 'public');
                $list->photo = $path;
            }
            $list->save();
            return redirect()->route('all.rentlist.settings')->with('success', 'Data Updated Successfully');
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * allReviewsSetting
     *
     * @return void
     */
    public function allReviewsSetting()
    {
        return view('admin.settings.all-reviews-setting');
    }


    /**
     * editReviews
     *
     * @param  mixed $review
     * @return void
     */
    public function editReviews(ReviewSection $review)
    {
        return view('admin.settings.edit-review', compact('review'));
    }

    /**
     * updateReview
     *
     * @param  mixed $request
     * @param  mixed $review
     * @return void
     */
    public function updateReview(Request $request, ReviewSection $review)
    {
        // dd($request->all());
        $data = $request->validate([
            'review_by' => 'required',
            'review_text' => 'required',
            'image' => 'required|image|mimes:png,jpg',
        ]);
        $review->review_by = $request->review_by;
        $review->review_text = $request->review_text;
        if ($request->has('image')) {
            $path = $request->file('image')->store('website', 'public');
            $review->image = $path;
        }
        $review->save();
        return redirect()->route('all.reviews.settings')->with('success', 'Data Updated Successfully');
    }


    /**
     * editMenue
     *
     * @param  mixed $id
     * @return void
     */
    public function editMenue($id)
    {
        $menue = DB::table('menues')->where('id',$id)->first();
        return view('admin.settings.edit-menue',compact('menue'));
    }

    public function updateMenue(Request $request, $id)
    {

         $request->validate([
            'title' => 'required',
            'url' => 'required',
        ]);

                 DB::table('menues')
                    ->where('id',$id)
                    ->limit(1)
                    ->update(array('title' => $request->title,'url' => $request->url));


        return redirect()->route('menue.settings')->with('success', 'Data Updated Successfully');
    }
}
