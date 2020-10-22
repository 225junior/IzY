<?php

namespace App\Http\Controllers\Prestations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Prestations\TypeCard;

class TypeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeCards = TypeCard::paginate(5);
        return view('prestations.typecards.index',compact('typeCards'));
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestations.typecards.create');
    }







    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,TypeCard $typeCard)
    {
        $request->validate([
			'name'=>'required',
		]);

		if ($request->active) {
			TypeCard::create([
				'libelle'=>$request->name,
				'active'=>true
			]);
		}else{
			TypeCard::create([
				'libelle'=>$request->name,
				'active'=>false
			]);
		}

		return redirect()->route('typecards.index')->with(['msg'=>'Enregistrement Effectué!']);
    }





    /*Display the specified resource.*/
    public function show(TypeCard $typeCard)
    {
        //
    }







    /*Show the form for editing the specified resource.*/
    public function edit(TypeCard $typeCard)
    {
        return view('prestations.Typecards.edit',compact('typeCard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prestations\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeCard $typeCard)
    {
        $request->validate([
			'name'=>'required',
		]);

		if ($request()->active) {
			TypeCard::find($typeCard->id)->update([
				'libelle'=>$request->name,
				'active'=>true,
			]);
		}else{
			TypeCard::find($typeCard->id)->update([
				'libelle'=>$request->name,
				'active'=>false,
			]);
		}
		return redirect()->route('typecards.index')->with(['msg'=>'Modiffication Effectuée!']);

    }


    /*Remove the specified resource from storage.*/
    public function destroy(TypeCard  $typeCard)
    {
        TypeCard::destroy($typeCard->id);
		return redirect()->route('typecards.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
	}
}
