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
			'libelle'=>'Traveaux Publics',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Banque-Finance',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Santé',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'internet-web',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Hôtellerie-Restauration',
			'active'=>true
		]);
		Domaine::create([
			'libelle'=>'Administratif',
			'active'=>true
		]);
    }
}
