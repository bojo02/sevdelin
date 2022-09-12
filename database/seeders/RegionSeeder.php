<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'Plovdiv',
            'code' => 'PV',
        ]);
    }
}
