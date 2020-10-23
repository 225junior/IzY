<?php

use Illuminate\Database\Seeder;
use App\Prestations\Domaine;
class DomaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Domaine::create([
			'libelle'=>'Commerce',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Maritime',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Aviation',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Batiment',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Automobile',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Electricité',
			'active'=>true
		]);
    }
}
