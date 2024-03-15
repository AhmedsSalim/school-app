<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => "First Lebanon School",
            'email' => 'firstlebanon1981@yahoo.com',
            'address' => 'العين - فلج هزاع - شارع المدارس',
            'phone' => "+97137806780",
            'logo' => '/img/First Lebanon School.jpeg',
        ]);
    }
}
