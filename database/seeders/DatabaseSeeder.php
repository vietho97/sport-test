<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CompetitionsTableSeeder;
use Database\Seeders\CountriesTableSeeder;
use Database\Seeders\MatchesTableSeeder;
use Database\Seeders\TeamsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CountriesTableSeeder::class,
            CompetitionsTableSeeder::class,
            TeamsTableSeeder::class,
            MatchesTableSeeder::class,
        ]);
    }
}
