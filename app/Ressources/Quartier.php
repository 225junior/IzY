<?php

namespace App\Ressources;

use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    protected $fillable=['libelle','active','region_id'];
}
