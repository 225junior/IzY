<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Prestations\Prestataire;
use App\Ressources\Quartier;
use App\Prestations\Card;


class PrestataireController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$prestataires = Prestataire::paginate(5);
        return view('prestations.prestataires.index',compact('prestataires'));
    }





    /*Show the form for creating a new resource.*/
    public function create()
    {
        $quartiers = Quartier::all();
        $cards = Card::all();
        return view('prestations.prestataires.create',compact('quartiers','cards'));
    }




    /*Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        request()->validate([
			'nom'=>'required|min:2|max:70',
			'prenoms'=>'required|min:2|max:70',
			'tel'=>'required|digits_between:8,13',
			'date_naiss'=>'required|date',
			'card_id'=>'required',
			'numCard'=>'required|unique:prestataires',
		]);

		#creation avec chekbox cochée
		if ($request->active) {
			Prestataire::create([
			'nom'=>request()->nom,
			'prenoms'=>request()->prenoms,
			'tel'=>request()->tel,
			'date_naiss'=>request()->date_naiss,
			'quartier_id'=>request()->quartier_id,
			'card_id'=>request()->card_id,
			'numCard'=>request()->numCard,
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
				'card_id'=>request()->card_id,
				'numCard'=>request()->numCard,
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

    /*Show the form for editing the specified resource*/
    public function edit(Prestataire $prestataire)
    {
        $quartiers = Quartier::where('id','<>',$prestataire->quartier->id)->get();
		$cards = Card::where('id','<>',$prestataire->card->id)->get();
        return view('prestations.prestataires.edit',compact('quartiers','prestataire','cards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Prestataire $prestataire)
    {
        request()->validate([
			'nom'=>'required|min:2|max:70',
			'prenoms'=>'required|min:2|max:70',
			'tel'=>'required|digits_between:8,13',
			'date_naiss'=>'required|date',
			'card_id'=>'required',
			'numCard'=>'required',
		]);

		#update avec chekbox cochée
		if ($request->active) {
			Prestataire::find($prestataire->id)->update([
			'nom'=>request()->nom,
			'prenoms'=>request()->prenoms,
			'tel'=>request()->tel,
			'date_naiss'=>request()->date_naiss,
			'quartier_id'=>request()->quartier_id,
			'card_id'=>request()->card_id,
			'numCard'=>request()->numCard,
			'active'=>true
			]);
		}else{
			#update sans chekbox
			Prestataire::find($prestataire->id)->update([
				'nom'=>request()->nom,
				'prenoms'=>request()->prenoms,
				'tel'=>request()->tel,
				'quartier_id'=>request()->quartier_id,
				'date_naiss'=>request()->date_naiss,
				'card_id'=>request()->card_id,
				'numCard'=>request()->numCard,
				'active'=>false
			]);
		}

		return redirect()->route('prestataires.index')->withErrors(['msg'=>'Enregistrement Effectué!']);
    }




    /*Remove the specified resource from storage.*/
    public function destroy(Prestataire $prestataire)
    {
        Prestataire::destroy($prestataire->id);
		return redirect()->route('prestataires.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
