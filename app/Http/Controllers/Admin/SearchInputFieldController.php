<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dock;
use Illuminate\Http\Request;
use App\Models\SearchInputField;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class SearchInputFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('admin.settings.search-input-fields');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SearchInputField  $searchInputField
     * @return \Illuminate\Http\Response
     */
    public function show(SearchInputField $searchInputField)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SearchInputField  $searchInputField
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchInputField $searchInputField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SearchInputField  $searchInputField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SearchInputField $searchInputField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SearchInputField  $searchInputField
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchInputField $searchInputField)
    {
        //
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                 