<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('locations')->insert([
            'name' => 'Konare',
            'code' => 'KN',
            'region_id' => 1,
            'rate_id' => 1,
        ]);
    }
}
