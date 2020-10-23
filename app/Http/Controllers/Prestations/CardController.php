<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use App\Prestations\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$cards = Card::paginate(5);
		return view('prestations.cards.index',compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestations.cards.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'name'=>'required'
		]);
		if ($request->active) {
			Card::create([
				'libelle'=>$request->name,
				'active'=>true
			]);
		}else{
			Card::create([
				'libelle'=>$request->name,
				'active'=>false
			]);
		}
		return redirect()->route('cards.index')->with(['msg'=>'Enregistrement Effectué !']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestations\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestations\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        return view('prestations.cards.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestations\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $request->validate([
			'name'=>'required'
		]);
		if ($request->active) {
			Card::find($card->id)->update([
				'libelle'=>$request->name,
				'active'=>true
			]);
		}else{
			Card::find($card->id)->update([
				'libelle'=>$request->name,
				'active'=>false
			]);
		}
		return redirect()->route('cards.index')->with(['msg'=>'Enregistrement Effectué !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestations\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
		Card::findOrFail($card->id)->delete();
		return redirect()->route('cards.index')->with(['msg'=>'Suppression Effectuée !']);
    }
}
