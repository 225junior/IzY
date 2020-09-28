<?php

use Illuminate\Database\Seeder;
use App\Ressources\Quartier;
class QuartierSeeder extends Seeder
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
            Quartier::create([
                'libelle' => $faker->streetName,
                'active'=>1,
                'commune_id'=> $faker->numberBetween(1,10)
            ]);
        }
    }
}
