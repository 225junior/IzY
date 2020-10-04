<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use App\Ressources\Quartier;
use App\Ressources\Commune;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$quartiers = Quartier::orderBy('id','desc')->paginate(50);
        return view('ressources.quartiers.index',compact('quartiers'));
    }











    /* Show the form for creating a new resource.*/
    public function create()
    {
		$communes = Commune::all();
        return view('ressources.quartiers.create',compact('communes'));
    }










	/*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
		request()->validate([
			'libelle'=> 'required | unique:quartiers',
			'commune_id'=>'required',
			]);

		if ($request->active) {
			Quartier::create(['libelle'=>request()->libelle,
							'commune_id'=>request()->commune_id,
							'active'=>true
			]);
		}else{
			Quartier::create([
				'libelle'=>request()->libelle,
				'commune_id'=>request()->commune_id,
			]);
		}

		return redirect()->route('quartiers.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
    }






    /* Display the specified resource.*/
    public function show(Quartier $quartier)
    {
		return 'specifique ressource';
    }










    /*Show the form for editing the specified resource.*/
    public function edit(Quartier $quartier)
    {
		$communes = Commune::where('id','<>',$quartier->commune->id)->get();
        return view('ressources.quartiers.edit',compact('quartier','communes'));
    }







    /*Update the specified resource in storage.*/
    public function update(Request $request, Quartier $quartier)
    {
        request()->validate([
            'libelle' => ['required'],
            'commune_id' => ['required'],
        ]);


		if (request()->active) {
			Quartier::find($quartier->id)->update([
            	'libelle' => $request->libelle,
            	'commune_id' => $request->commune_id,
				'active'=>true
			]);
		}else {
			Quartier::find($quartier->id)->update([
            	'libelle' => $request->libelle,
            	'commune_id' => $request->commune_id,
				'active'=>false

			]);
		}

        return redirect()->route('quartiers.index')->withErrors(['msg' => 'Modiffication éffectuée !']);
    }








    /*Remove the specified resource from storage.*/
    public function destroy(Quartier $quartier)
    {
		Quartier::destroy($quartier->id);
		return redirect()->route('quartiers.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
