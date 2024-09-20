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

        DB::table('matches')->truncate();

        DB::table('matches')->insert([
            // Laliga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => '0ed62817-5f0f-478c-98f5-c2df31b6a6db',
                'away_team_id' => '16ec048c-2248-434d-be0a-ab7ca50103e4',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode(array_map(function() use ($faker) { return $faker->numberBetween(0, 9); }, range(1, 7))),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Laliga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => 'a2277c05-17d8-4172-8ec5-e5324c1c3cb0',
                'away_team_id' => 'e1b14647-9c00-43d0-b937-d931bfe92c35',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode(array_map(function() use ($faker) { return $faker->numberBetween(0, 9); }, range(1, 7))),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Laliga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'home_team_id' => 'e75c177c-dff1-4579-b394-f098eaca8e19',
                'away_team_id' => '16ec048c-2248-434d-be0a-ab7ca50103e4',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Premier League
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => '383d859d-907d-4801-b6c0-234fa2e99e8e',
                'away_team_id' => '5f219f49-428f-4422-8496-f97e3fcd34fd',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 4, 2, 0, 0, 4, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => '610f6686-d272-41cc-b242-1d00952ed5b7',
                'away_team_id' => 'c512e406-98b5-42e8-9edc-4b1e9fe24be3',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => 'c512e406-98b5-42e8-9edc-4b1e9fe24be3',
                'away_team_id' => 'dc8d8c14-ff1a-445f-bc4c-31a0580c4853',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => '383d859d-907d-4801-b6c0-234fa2e99e8e',
                'away_team_id' => 'c512e406-98b5-42e8-9edc-4b1e9fe24be3',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'home_team_id' => 'dc8d8c14-ff1a-445f-bc4c-31a0580c4853',
                'away_team_id' => '5f219f49-428f-4422-8496-f97e3fcd34fd',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Bundesliga
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '1b1ec984-469d-4e42-b55a-923c0cb943fb',
                'away_team_id' => '66cc02ad-d11d-49c9-8a2b-5fffb0f8efcb',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '7595dcc2-142a-4829-a657-a0feb64600f9',
                'away_team_id' => '7cae4a4d-77fd-459e-a23d-97b1675db33c',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => 'cddb7a6d-9502-4eff-a9c2-22c4c980dcbf',
                'away_team_id' => '1b1ec984-469d-4e42-b55a-923c0cb943fb',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '7cae4a4d-77fd-459e-a23d-97b1675db33c',
                'away_team_id' => '66cc02ad-d11d-49c9-8a2b-5fffb0f8efcb',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'home_team_id' => '7595dcc2-142a-4829-a657-a0feb64600f9',
                'away_team_id' => 'cddb7a6d-9502-4eff-a9c2-22c4c980dcbf',
                'status_id' => rand(1, 9),
                'match_time' => $faker->dateTimeBetween('-1 year', '+1 year')->getTimestamp(),
                'home_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'away_scores' => json_encode([3, 0, 1, 0, -1, 0, 3]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
