<?php

use Illuminate\Database\Seeder;
use App\Prestations\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// id = 1 Traveaux Publics
        Service::create([
			'libelle'=>'Directeur ou ingénieur de Travaux',
			'domaine_id'=>1,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'Conducteur de grue mobile',
			'domaine_id'=>1,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'Grutier',
			'domaine_id'=>1,
			'active'=>true
		]);

		// id = 2 Banque-Finance
		Service::create([
			'libelle'=>'analyste-financier',
			'domaine_id'=>2,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'directeur financier',
			'domaine_id'=>2,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'directeur d’investissement',
			'domaine_id'=>2,
			'active'=>true
		]);

		// santé
		Service::create([
			'libelle'=>'cardiologue',
			'domaine_id'=>3,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'sage-femme',
			'domaine_id'=>3,
			'active'=>true
		]);

		// internet-web
		Service::create([
			'libelle'=>'concepteur web',
			'domaine_id'=>4,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'hacker éthique',
			'domaine_id'=>4,
			'active'=>true
		]);

		// Hôtellerie-Restauration
		Service::create([
			'libelle'=>'chef-réceptionniste',
			'domaine_id'=>5,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'concierge de grand hôtel',
			'domaine_id'=>5,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'directeur d’hôtel',
			'domaine_id'=>5,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'barman',
			'domaine_id'=>5,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'réceptionniste',
			'domaine_id'=>5,
			'active'=>true
		]);


		// Administratif
		Service::create([
			'libelle'=>'adjoint administratif',
			'domaine_id'=>6,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'assistant de ressources humaines',
			'domaine_id'=>6,
			'active'=>true
		]);
		Service::create([
			'libelle'=>'contrôleur de gestion',
			'domaine_id'=>6,
			'active'=>true
		]);
    }
}
