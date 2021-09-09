<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Dock;
use App\Models\SearchInputField;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index()
    {
        $input_fields = SearchInputField::where('status',1)->pluck('input_fields')->toArray();
       return view('front-end.pages.index',compact('input_fields'));
    }
    public function showRegisterForm()
    {
        return view('front-end.pages.registration-form');
    }

    //all listing
    public function allDocksListing($query = null)
    {
            $docks = null;
        // if query has location type
         if ($docks == null) {
            $docks = $this->dockQuery('location_type',$query);
        }

        // if query has state
        if (empty($docks[0]) || $docks == null) {
            $docks = $this->dockQuery('dock_state',$query);
        }

        if (!$query) {
            $docks = Dock::with('user')
            ->where('dock_status',1)
            ->latest()
            ->paginate(20);
        }
        return view('front-end.pages.all-docks-listing',compact('docks'));


    }

    // query scope
    public function dockQuery(String $option,$value)
    {
      return  $docks = Dock::with('user')
        ->where('dock_status',1)
        ->where($option,'like', '%'.$value.'%')
        ->latest()
        ->paginate(10);
    }

    public function dockDetails(Dock $dock)
    {
        return view('front-end.pages.dock-details',compact('dock'));
    }

    public function searchDocks(Request $request)
    {
        $query = Dock::where('dock_status',1);
        if(request()->has('county')) {
            $query->where('county', 'like','%'. request('county').'%');
        }
        if(request()->has('list_type')) {
            $query->where('list_type', 'like','%'. request('list_type').'%');
        }
        if(request()->has('dock_country')) {
            $query->where('dock_country', request('dock_country'));
        }
        if(request()->has('dock_state')) {
            $query->where('dock_state', 'like', '%'.request('dock_state').'%');
        }
        if(request()->has('price') && request('price') != null) {
            $query->where('price', 'like', '%'.request('price').'%');
        }
        if(request()->has('postal_code')) {
            $query->where('zip_code', 'like', '%'.request('postal_code').'%');
        }
        if(request()->has('boat_length')) {
            $query->where('max_length', 'like','%'. request('boat_length').'%');
        }
        if(request()->has('boat_width')) {
            $query->where('max_width', 'like', '%'.request('boat_width').'%');
        }
        if(request()->has('boat_beam')) {
            $query->where('max_draw', 'like', '%'.request('boat_beam').'%');
        }
        if(request()->has('boat_clearance')) {
            $query->where('max_height', 'like', '%'.request('boat_clearance').'%');
        }

       $searchResults = $query->paginate(10);
        return view('front-end.pages.search-results',compact('searchResults'));

    }

    public function countryFilter(Request $request)
    {
        // dd($request->all());
      $country = $request->country;
      $searchResults = null;
      $query = Dock::where('dock_status',1);
      $state = $request->state;

      if ($request->has('country')) {
        $searchResults = $query->where('dock_country','LIKE',$country)->get();
      }

      if($request->has('state')){
        $searchResults = $query->where('dock_state','LIKE',$state)->get();
      }

      if ($request->has('type')) {
        $status = $request->type;
        $searchResults = $status == 1 ? $query->where('is_featured',1)->get()
                                        : $query->where('is_featured',0)->get();
      }
      if ($request->has('list_type')) {
        $searchResults = $query->where('list_type',$request->list_type)->get();
      }
      $filter = view('front-end.pages.filter-results',compact('searchResults'))->render();
      return response()->json($filter);
    }

    public function contact_us()
    {
        return view('front-end.pages.contact-us');
    }
}
