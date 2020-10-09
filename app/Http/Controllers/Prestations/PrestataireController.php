<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prestations\Prestataire;
use App\Ressources\Quartier;


class PrestataireController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$prestataires = Prestataire::paginate(15);
        return view('prestations.prestataires.index',compact('prestataires'));
    }





    /*Show the form for creating a new resource.*/
    public function create()
    {
        $quartiers = Quartier::all();
        return view('prestations.prestataires.create',compact('quartiers'));
    }




    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        request()->validate([
			'nom'=>'required',
			'prenoms'=>'required',
			'nom'=>'required',
			'nom'=>'required',
		]);

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
    public function destroy(Prestataire $prestataire)
    {
        Prestataire::destroy($prestataire->id);
		return redirect()->route('prestataires.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
