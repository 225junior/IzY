<?php

namespace App\Prestations;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
	protected $fillable = ['nom','prenoms','tel','date_naiss','quartier_id','active'];

	public function quartier()
	{
		return $this->belongsTo('App\Ressources\Quartier');
	}
}
