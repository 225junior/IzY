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
			'libelle'=>'required',
			'active'=>'required',
		]);

		Domaine::create([
			'libelle'=>$request->libelle,
			'active'=>$request->active
		]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
