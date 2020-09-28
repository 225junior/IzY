<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use App\Ressources\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$regions = Region::paginate(5);
        return view('ressources.regions.index',compact('regions'));
    }

    /* Show the form for creating a new resource.*/
    public function create()
    {
        return view('ressources.regions.create');
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
     * @param  \App\Ressources\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ressources\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ressources\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ressources\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }
}
