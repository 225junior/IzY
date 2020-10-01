<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
	protected $fillable=['libelle','active','region_id'];


	// ville appartient à commue
	public function region()
    {
        return $this->belongsTo('App\Ressources\Region');
	}

	// possede plusieurs communes
	public function communes()
    {
        return $this->hasMany('App\Commune');
    }
}
