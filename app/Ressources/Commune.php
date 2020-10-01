<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $fillable=['libelle','active','region_id'];


	public function ville()
    {
        return $this->belongsTo('App\Ressources\Ville');
    }
}
