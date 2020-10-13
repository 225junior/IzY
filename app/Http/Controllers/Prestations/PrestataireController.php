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
			'nom'=>'required|min:2|max:70',
			'prenoms'=>'required|min:2|max:70',
			'tel'=>'required|digits_between:8,12',
			'date_naiss'=>'required|date',
		]);

		#creation avec chekbox cochée
		if ($request->active) {
			Prestataire::create([
			'nom'=>request()->nom,
			'prenoms'=>request()->prenoms,
			'tel'=>request()->tel,
			'date_naiss'=>request()->date_naiss,
			'quartier_id'=>request()->quartier_id,
			'active'=>true
			]);
		}else{
			#creation sans chekbox
			Prestataire::create([
				'nom'=>request()->nom,
				'prenoms'=>request()->prenoms,
				'tel'=>request()->tel,
				'quartier_id'=>request()->quartier_id,
				'date_naiss'=>request()->date_naiss,
			]);
		}

		return redirect()->route('prestataires.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
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