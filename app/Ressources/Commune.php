<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable=['libelle','active','ville_id'];

	// commune appartient à ville
	public function ville()
    {
        return $this->belongsTo('App\Ressources\Ville');
	}

	// possede plusieurs quartiers
	public function quartiers()
    {
        return $this->hasMany('App\Quartier');
    }
}
