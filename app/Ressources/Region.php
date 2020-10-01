<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable=['libelle','active'];

	// possede plusieurs villes
	public function villes()
    {
        return $this->hasMany('App\Ville');
    }
}
