<?php

namespace App\Http\Controllers\Ressources;

use App\Http\Controllers\Controller;
use App\Ressources\Ville;
use App\Ressources\Region;
use Illuminate\Http\Request;

class VilleController extends Controller
{
	/*Display a listing of the resource.*/
	public function index()
	{
		$villes = Ville::orderBy('id','desc')->paginate(50);
		return view('ressources.villes.index',compact('villes'));
	}











	 /* Show the form for creating a new resource.*/
	 public function create()
	 {
		$regions = Region::all();
		return view('ressources.villes.create',compact('regions'));
	 }










	 /*Store a newly created resource in storage.*/
	 public function store(Request $request)
	 {
		request()->validate([
			'libelle'=> 'required|unique:villes',
			'region_id'=>'required',
		]);

		if ($request->active) {
			Ville::create(['libelle'=>request()->libelle,
							'region_id'=>request()->region_id,
							'active'=>true
			]);
		}else{
			Ville::create([
				'libelle'=>request()->libelle,
				'region_id'=>request()->region_id
			]);
		}

		return redirect()->route('villes.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
	 }












	 /* Display the specified resource.*/
	 public function show(Ville $ville)
	 {
		 return 'specifique ressource';
	 }










	 /*Show the form for editing the specified resource.*/
	 public function edit(Ville $ville)
	 {
		 return view('ressources.villes.edit',compact('ville'));
	 }







	 /*Update the specified resource in storage.*/
	 public function update(Request $request, Ville $ville)
	 {
		 request()->validate([
			 'libelle' => ['required'],
			 'region_id' => ['required'],
		 ]);

		 Ville::find($ville->id)->update([
			 'libelle' => $request->libelle,
			 'region_id' => $request->region_id,
		 ]);
		 return redirect()->route('villes.index')->withErrors(['msg' => 'Modiffication éffectuée !']);
	 }








	 /*Remove the specified resource from storage.*/
	 public function destroy(Ville $ville)
	 {
		 Ville::destroy($ville->id);
		 return redirect()->route('villes.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
	 }
}
