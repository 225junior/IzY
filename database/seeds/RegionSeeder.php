<?php

use Illuminate\Database\Seeder;
use App\Ressources\Region;

class RegionSeeder extends Seeder
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
            Region::create([
                'libelle'=>$faker->city,
                'active'=>1,
            ]);
        }
    }
}
