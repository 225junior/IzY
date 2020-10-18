<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use App\Prestations\TypeCard;
use Illuminate\Http\Request;

class TypeCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typecards = TypeCard::paginate('5');
        return view('prestations.typecards.index',compact('typecards'));
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
    public function store(Request $request)
    {
        $request->validate([
			'name'=>'required',
		]);


		if ($request->activate) {
			Domaine::create([
				'name'=>$request->libelle,
				'active'=>$request->active
			]);
		}else{
			Domaine::create([
				'name'=>$request->libelle,
				]);
		}

		
		return redirect()->route('typecards.index')->with(['msg'=>'Enregistrement Effectué!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prestations\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function show(TypeCard $typeCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prestations\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeCard $typeCard)
    {
        return view('prestations.typecards.edit',compact('typecard'));
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
        $request()->validate([
			'name'=>'required',
		]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prestations\TypeCard  $typeCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCard $typeCard)
    {
		TypeCard::destroy($typeCard);
		return redirect()->route('typecards.index')->withErrors(['msg' => 'Suppresion éffectuée !']);
    }
}
