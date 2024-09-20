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
                'id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'name' => 'Premier League',
                'logo' => 'premier_league_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'name' => 'La Liga',
                'logo' => 'la_liga_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'name' => 'Bundesliga',
                'logo' => 'bundesliga_logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('competitions')->insert($competitions);
    }
}
