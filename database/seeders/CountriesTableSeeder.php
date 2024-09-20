<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'id' => '02f3108b-a11b-4039-9ba7-0bbd46bf0a92',
                'name' => 'Spain',
                'logo' => 'spain.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => '79221ed7-93c7-454f-827f-72124407d1cc',
                'name' => 'Germany',
                'logo' => 'germany.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'f72252f4-0525-40d5-a78c-b8f8c17bb215',
                'name' => 'England',
                'logo' => 'england.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
