<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_setting')->insert([
            [
                'id' => 1,
                'slug' => '/',
                'view' => 'pages/home/index',
                'title' => 'Home | Website',
                'description' => '',
                'keyword' => ''
            ],
        ]);
    }
}
