<?php

use Illuminate\Database\Seeder;
use App\Prestations\Prestataire;
class PrestataireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create('fr_FR'); // create a French faker
		for ($i = 0; $i < 10; $i++) {
			Prestataire::create([
			'nom'=> $faker->firstName,
			'prenoms'=> $faker->lastName,
			'tel'=> $faker->mobileNumber,
			'date_naiss'=>$faker->date,
			'quartier_id'=>$faker->numberBetween(1,10),
			'card_id'=>$faker->numberBetween(1,3),
			'numCard'=> $faker->creditCardNumber,
			'active'=>true
		]);
		}
    }
}
