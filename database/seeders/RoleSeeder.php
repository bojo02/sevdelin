<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'slug' => 'Admin',
        ]);
        DB::table('user_roles')->insert([
            'user_id' => 1,
            'role_id' => 1,
        ]);
    }
}
