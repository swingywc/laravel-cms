<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
            [
                'id' => 1,
                'name' => 'Home',
                'type' => 'internal_link',
                'link' => '/',
                'page_id' => null,
                'parent_id' => null,
                'lft' => null,
                'rgt' => null,
                'depth' => null
            ],
        ]);
    }
}
