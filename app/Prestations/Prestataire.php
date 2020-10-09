<?php

namespace App\Prestations;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
	public function quartier()
	{
		return $this->belongsTo('App\Ressources\Quartier');
	}
}
