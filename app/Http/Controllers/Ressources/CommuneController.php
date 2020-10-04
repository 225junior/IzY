<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use App\Ressources\Commune;
use App\Ressources\Ville;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$communes = Commune::orderBy('id','desc')->paginate(50);
        return view('ressources.communes.index',compact('communes'));
    }











    /* Show the form for creating a new resource.*/
    public function create()
    {
		$villes = Ville::all();
        return view('ressources.communes.create',compact('villes'));
    }










	/*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
		request()->validate([
			'libelle'=> 'required|unique:communes',
			'ville_id'=>'required',
		]);
		if ($request->active) {
			Commune::create(['libelle'=>request()->libelle,
							'ville_id'=>request()->ville_id,
							'active'=>true
			]);
		}else{
			Commune::create([
				'libelle'=>request()->libelle,
				'ville_id'=>request()->ville_id
			]);
		}

		return redirect()->route('communes.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
    }











    /* Display the specified resource.*/
    public function show(Commune $commune)
    {
		return 'specifique ressource';
    }










    /*Show the form for editing the specified resource.*/
    public function edit(Commune $commune)
    {
		$villes = Ville::where('id','<>',$commune->ville->id)->get();
        return view('ressources.communes.edit',compact('commune','villes'));
    }







    /*Update the specified resource in storage.*/
    public function update(Request $request, Commune $commune)
    {
        request()->validate([
            'libelle' => ['required'],
            'ville_id' => ['required'],
        ]);
		if (request()->active) {
			Commune::find($commune->id)->update([
				'libelle' => $request->libelle,
				'ville_id' => $request->ville_id,
				'active'=>true
			]);
		}else {
			Commune::find($commune->id)->update([
				'libelle' => $request->libelle,
				'ville_id' => $request->ville_id,
				'active'=>false

			]);
		}
        return redirect()->route('communes.index')->withErrors(['msg' => 'Modiffication éffectuée !']);
    }








    /*Remove the specified resource from storage.*/
    public function destroy(Commune $commune)
    {
		Commune::destroy($commune->id);
		return redirect()->route('communes.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
