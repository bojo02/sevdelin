<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'content' => 'Welcome to Fast Despatch Logistics!',
            'slug' => 'home_title',
        ]);
        DB::table('texts')->insert([
            'content' => 'Fantastic opportunity to join one of the largest national independent last mile delivery service providers.Join team FDL and take charge of your career, working as a delivery driver to your own schedule andfitting work around what matters to you. By joining FDL you’ll get paid theoretical and practical trainingplus all the support you may need to succeed. ',
            'slug' => 'home_description',
        ]);
        DB::table('texts')->insert([
            'content' => 'You are looking at details for Location Plymouth!',
            'slug' => 'presentation_title',
        ]);
        DB::table('texts')->insert([
            'content' => 'YOU ARE ONE STEP AWAY FROM BECOMING OUR PARTNER!',
            'slug' => 'partner_title',
        ]);
        DB::table('texts')->insert([
            'content' => 'The registration process is easy and you can do it from any location at any time. No more boring interview meetings and waste of time!',
            'slug' => 'partner_description_1',
        ]);
        DB::table('texts')->insert([
            'content' => 'Download our very own APP - "FDL Startup" from the APP Store or Google Play Store and register your account',
            'slug' => 'partner_description_2',
        ]);
        DB::table('texts')->insert([
            'content' => 'In the APP there is a Chat section where you can send messages directly toyour local trainer or you will receive messages from him/her(make sure to turn ON the notifications so you won\'t miss any updates)',
            'slug' => 'partner_description_3',
        ]);
        DB::table('texts')->insert([
            'content' => 'LEARN IN DETAILS',
            'slug' => 'partner_videos_title',
        ]);
        DB::table('texts')->insert([
            'content' => 'We are sorry to hear that ourcurrent offer is not acceptable.',
            'slug' => 'unhappy_title',
        ]);
        DB::table('texts')->insert([
            'content' => 'We kindly ask you to join our priority list. Wewill notify you as soon as we have similarjobs including different positions within thecompany.Our promise we won\'t spam your inbox andyou can unsubscribe at any time.',
            'slug' => 'unhappy_description_1',
        ]);
        DB::table('texts')->insert([
            'content' => 'We are sorry to hear that ourcurrent offer is not acceptable.',
            'slug' => 'unhappy_description_2',
        ]);
        DB::table('texts')->insert([
            'content' => '0',
            'slug' => 'popup_status',
        ]);
    }
}
