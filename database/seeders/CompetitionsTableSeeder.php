<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $competitions = [
            [
                'id' => Str::uuid(),
                'name' => 'Premier League',
                'logo' => 'premier_league_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'La Liga',
                'logo' => 'la_liga_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Serie A',
                'logo' => 'serie_a_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Bundesliga',
                'logo' => 'bundesliga_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Ligue 1',
                'logo' => 'ligue_1_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('competitions')->insert($competitions);
    }
}
