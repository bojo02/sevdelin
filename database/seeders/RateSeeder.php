<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            'name' => 'High',
            'code' => 'hgh',
            'video_id' => 1,
        ]);
    }
}
