<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            // La Liga
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Real Madrid',
                'logo' => 'real_madrid_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'FC Barcelona',
                'logo' => 'fc_barcelona_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Atletico Madrid',
                'logo' => 'atletico_madrid_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Sevilla FC',
                'logo' => 'sevilla_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Valencia CF',
                'logo' => 'valencia_cf_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Premier League
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Manchester United',
                'logo' => 'manchester_united_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Liverpool FC',
                'logo' => 'liverpool_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Chelsea FC',
                'logo' => 'chelsea_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Arsenal FC',
                'logo' => 'arsenal_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Manchester City',
                'logo' => 'manchester_city_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Bundesliga
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Bayern Munich',
                'logo' => 'bayern_munich_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Borussia Dortmund',
                'logo' => 'borussia_dortmund_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'RB Leipzig',
                'logo' => 'rb_leipzig_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Bayer Leverkusen',
                'logo' => 'bayer_leverkusen_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Schalke 04',
                'logo' => 'schalke_04_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
