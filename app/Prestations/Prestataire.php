<?php

namespace App\Prestations;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User', 'foreign_key');
	}
}
