<?php

use Illuminate\Database\Seeder;
use App\Prestations\Card;
class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		Card::create([
			'libelle' => 'CNI',
			'active'=>1,
		]);

		Card::create([
			'libelle' => "Attestation d'identé",
			'active'=>1,
		]);

		Card::create([
			'libelle' => 'Pasport',
			'active'=>1,
		]);
    }
}
