<?php

namespace App\Http\Controllers\Prestations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Prestations\Service;
use App\Prestations\Domaine;

class ServiceController extends Controller
{
    /*Display a listing of the resource.*/
    public function index()
    {
		$services = Service::paginate(5);
        return view('prestations.services.index',compact('services'));
    }

    /*Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$domaines = Domaine::all();
        return view('prestations.services.create',compact('domaines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
			'libelle'=>'required',
			'domaine_id'=>'required',
		]);
		if ($request->active) {
			Service::create([
				'libelle'=>$request->libelle,
				'domaine_id'=>$request->domaine_id,
				'active'=>true,
				]);
		}else{
			Service::create([
				'libelle'=>$request->libelle,
				'domaine_id'=>$request->domaine_id,
				'active'=>false,
			]);
		}
		return redirect()->route('services.index')->with(['msg'=>'Enregistrement Effectué !']);
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
    public function edit(Service $service)
    {
		$domaines = Domaine::where('id','<>',$service->domaine->id)->get();
        return view('prestations.services.edit',compact('service','domaines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
			'libelle'=>'required',
			'domaine_id'=>'required',
		]);
		if ($request->active) {
			Service::find($service->id)->update([
				'libelle'=>$request->libelle,
				'domaine_id'=>$request->domaine_id,
				'active'=>true,
				]);
		}else{
			Service::find($service->id)->update([
				'libelle'=>$request->libelle,
				'domaine_id'=>$request->domaine_id,
				'active'=>false,
			]);
		}
		return redirect()->route('services.index')->with(['msg'=>'Modiffication Effectué !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
		Service::findOrFail($service->id)->delete();
		return redirect()->route('services.index')->with(['msg'=>'Suppression Effectuée !']);
    }
}
