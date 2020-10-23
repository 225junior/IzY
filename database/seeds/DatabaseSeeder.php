<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(VilleSeeder::class);
        $this->call(CommuneSeeder::class);
        $this->call(QuartierSeeder::class);
        $this->call(CardSeeder::class);
        $this->call(DomaineSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PrestataireSeeder::class);
    }
}
