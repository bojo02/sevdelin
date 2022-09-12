<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            'name' => 'logo.png',
            'path' => 'images/logo.png',
            'slug' => 'home_image',
        ]);
        DB::table('photos')->insert([
            'name' => 'unhappy.png',
            'path' => 'images/unhappy.png',
            'slug' => 'unhappy_image',
        ]);
        DB::table('photos')->insert([
            'name' => 'partner.jpg',
            'path' => 'images/partner.jpg',
            'slug' => 'partner_image',
        ]);
    }
}
