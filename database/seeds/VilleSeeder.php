<?php

use Illuminate\Database\Seeder;
use App\Ressources\Ville;

class VilleSeeder extends Seeder
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
            Ville::create([
                'libelle' => $faker->city,
                'active'=>1,
                'region_id'=>1
            ]);
        }

    }
}
