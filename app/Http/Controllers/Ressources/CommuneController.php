<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use App\Ressources\Commune;
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
        return view('ressources.communes.create');
    }










	/*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
		request()->validate([
			'libelle'=> 'required','unique:communes',
			'ville_id'=>10,
		]);

		if ($request->active) {
			Commune::create(['libelle'=>request()->libelle,
							'ville_id'=>10,
							'active'=>true
			]);
		}else{
			Commune::create([
				'libelle'=>request()->libelle,
				'ville_id'=>10
			]);
		}

		return redirect()->route('communes.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
    }












    /* Display the specified resource.*/
    public function show(Commune $quartier)
    {
		return 'specifique ressource';
    }










    /*Show the form for editing the specified resource.*/
    public function edit(Commune $quartier)
    {
        return view('ressources.communes.edit',compact('quartier'));
    }







    /*Update the specified resource in storage.*/
    public function update(Request $request, Commune $quartier)
    {
        request()->validate([
            'libelle' => ['required'],
            'ville_id' => ['required'],
        ]);

        Commune::find($quartier->id)->update([
            'libelle' => $request->libelle,
            'ville_id' => $request->ville_id,
        ]);
        return redirect()->route('communes.index')->withErrors(['msg' => 'Modiffication éffectuée !']);
    }








    /*Remove the specified resource from storage.*/
    public function destroy(Commune $quartier)
    {
		Commune::destroy($quartier->id);
		return redirect()->route('communes.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
