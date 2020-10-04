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
		$regions = Region::orderBy('id','desc')->paginate(5);
        return view('ressources.regions.index',compact('regions'));
    }









    /* Show the form for creating a new resource.*/
    public function create()
    {
        return view('ressources.regions.create');
    }








    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
		request()->validate(['libelle'=> 'required | unique:regions']);

		if ($request->active) {
			Region::create(['libelle'=>request()->libelle,
							'active'=>true
			]);
		}else{
			Region::create(['libelle'=>request()->libelle]);
		}

		return redirect()->route('regions.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
    }









    /* Display the specified resource.*/
    public function show(Region $region)
    {
        return 'specifique ressource';
    }











    /*Show the form for editing the specified resource.*/
    public function edit(Region $region)
    {
        return view('ressources.regions.edit',compact('region'));
    }










    /* Update the specified resource in storage.*/
    public function update(Request $request, Region $region)
    {
		request()->validate([
            'libelle' => 'required',
        ]);

        Region::find($region->id)->update([
            'libelle' => $request->libelle,
        ]);
        return redirect()->route('regions.index')->withErrors(['msg' => 'Modiffication éffectuée !']);
    }











    /*Remove the specified resource from storage.*/
    public function destroy(Region $region)
    {
		Region::destroy($region->id);
		return redirect()->route('regions.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
