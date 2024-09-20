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
                'id' => '0ed62817-5f0f-478c-98f5-c2df31b6a6db',
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Real Madrid',
                'logo' => 'real_madrid_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '16ec048c-2248-434d-be0a-ab7ca50103e4',
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'FC Barcelona',
                'logo' => 'fc_barcelona_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'a2277c05-17d8-4172-8ec5-e5324c1c3cb0',
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Atletico Madrid',
                'logo' => 'atletico_madrid_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'e1b14647-9c00-43d0-b937-d931bfe92c35',
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Sevilla FC',
                'logo' => 'sevilla_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'e75c177c-dff1-4579-b394-f098eaca8e19',
                'competition_id' => '77e27475-582e-4eb9-9271-bb5628dd57c7',
                'country_id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Valencia CF',
                'logo' => 'valencia_cf_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Premier League
            [
                'id' => '383d859d-907d-4801-b6c0-234fa2e99e8e',
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Manchester United',
                'logo' => 'manchester_united_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '5f219f49-428f-4422-8496-f97e3fcd34fd',
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Liverpool FC',
                'logo' => 'liverpool_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '610f6686-d272-41cc-b242-1d00952ed5b7',
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Chelsea FC',
                'logo' => 'chelsea_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'c512e406-98b5-42e8-9edc-4b1e9fe24be3',
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Arsenal FC',
                'logo' => 'arsenal_fc_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'dc8d8c14-ff1a-445f-bc4c-31a0580c4853',
                'competition_id' => '5bd1a008-5b6a-44c1-85c2-780542ed8c7b',
                'country_id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'Manchester City',
                'logo' => 'manchester_city_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Bundesliga
            [
                'id' => '1b1ec984-469d-4e42-b55a-923c0cb943fb',
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Bayern Munich',
                'logo' => 'bayern_munich_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '66cc02ad-d11d-49c9-8a2b-5fffb0f8efcb',
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Borussia Dortmund',
                'logo' => 'borussia_dortmund_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7595dcc2-142a-4829-a657-a0feb64600f9',
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'RB Leipzig',
                'logo' => 'rb_leipzig_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '7cae4a4d-77fd-459e-a23d-97b1675db33c',
                'competition_id' => '2bbbb090-2d90-4cf8-8620-8827bd8ca33c',
                'country_id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Bayer Leverkusen',
                'logo' => 'bayer_leverkusen_logo_url',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'cddb7a6d-9502-4eff-a9c2-22c4c980dcbf',
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
