<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable=['libelle','active','region_id'];
}
