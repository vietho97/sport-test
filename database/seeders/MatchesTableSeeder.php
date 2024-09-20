<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('matches')->insert([
            // Laliga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => 'fcd57d04-f6c8-405f-8a4a-8aa2fc1e6437',
                'away_team_id' => 'd36a23b0-c907-4023-a53b-31b20305916e',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([1, 2, 2, 3, 9, 3, 0]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Laliga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => 'cb40de1a-3da7-4ba9-b38c-164f50ac9fb7',
                'away_team_id' => '9be1c48a-82a8-444f-ab4d-b75cca75a95b',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([1, 2, 2, 3, 9, 3, 0]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
             // Laliga
             [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => '238579bc-0cee-4e0e-8fc4-70635f78d61b',
                'away_team_id' => 'd36a23b0-c907-4023-a53b-31b20305916e',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Premier League
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => '7fce62da-158d-45be-8c55-d4aa45683c60',
                'away_team_id' => '8dad8b35-e2e2-47b3-bea1-ea42c2317a5c',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => '8dad8b35-e2e2-47b3-bea1-ea42c2317a5c',
                'away_team_id' => '9f60d6aa-25bf-4539-8e71-820692956cbd',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => 'c0ece3b8-ae82-4ede-88b0-b77dd66821de',
                'away_team_id' => 'ce39ab77-64df-4203-8e6b-7e75d64248b5',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => 'c0ece3b8-ae82-4ede-88b0-b77dd66821de',
                'away_team_id' => '8dad8b35-e2e2-47b3-bea1-ea42c2317a5c',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => 'ce39ab77-64df-4203-8e6b-7e75d64248b5',
                'away_team_id' => '7fce62da-158d-45be-8c55-d4aa45683c60',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Bundesliga
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '02650057-5de3-4730-b39f-f60b6fe45691',
                'away_team_id' => '20417239-e1e8-4bba-b6da-c6729fe6e80e',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '57642c5a-b670-45ee-b543-15f3ccbc7b69',
                'away_team_id' => 'bbc02c35-cb5e-4e8e-b7bc-6352fe7687c4',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => 'cfdeaa14-0450-4d35-902e-6aff3dbd16a4',
                'away_team_id' => '02650057-5de3-4730-b39f-f60b6fe45691',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '20417239-e1e8-4bba-b6da-c6729fe6e80e',
                'away_team_id' => '57642c5a-b670-45ee-b543-15f3ccbc7b69',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => 'cfdeaa14-0450-4d35-902e-6aff3dbd16a4',
                'away_team_id' => '20417239-e1e8-4bba-b6da-c6729fe6e80e',
                'status_id' => rand(1, 9),
                'match_time' => strtotime(now()),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
