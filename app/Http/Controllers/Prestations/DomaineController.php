<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prestations\Domaine;

class DomaineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$domaines = Domaine::paginate('5');
        return view('prestations.domaines.index',compact('domaines'));
	}






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestations.domaines.create');
    }






    /*Store a newly created resource in storage*/
    public function store(Request $request)
    {
        $request->validate([
			'name'=>'required',
		]);
		if ($request->active) {
			Domaine::create([
				'libelle'=>$request->name,
				'active'=>true
			]);
		}else{
			Domaine::create([
				'libelle'=>$request->name,
				'active'=>false
			]);
		}
		return redirect()->route('domaines.index')->with(['msg'=>'Enregistrement Effectué!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Domaine $domaine)
    {
        return view('prestations.domaines.edit',compact('domaine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Domaine $domaine)
    {
		$request->validate([
			'name'=>'required',
		]);
		if ($request->active) {
			Domaine::find($domaine->id)->update([
				'libelle'=>$request->name,
				'active'=>true,
			]);
		}else{
			Domaine::find($domaine->id)->update([
				'libelle'=>$request->name,
				'active'=>false,
			]);
		}
		return redirect()->route('domaines.index')->with(['msg'=>'Modiffication Effectuée!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domaine $domaine)
    {
		Domaine::findOrFail($domaine->id)->delete();
		return redirect()->route('domaines.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
