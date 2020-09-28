<?php

use Illuminate\Database\Seeder;
use App\Ressources\Commune;
class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            Commune::create([
                'libelle' => $faker->city,
                'active'=>1,
                'ville_id'=> $faker->numberBetween(1,10)
            ]);
        }
    }
}
