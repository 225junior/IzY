<?php

namespace App\Prestations;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable=['libelle','domaine_id','active'];


	public function domaine()
	{
		return $this->belongsTo('App\Prestations\Domaine');
	}

}
