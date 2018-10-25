<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'id' => 1,
                'name' => 'Webmaster Controls',
                'guard_name' => 'web',
            ],
            [
                'id' => 2,
                'name' => 'Roles and Permissions Controls',
                'guard_name' => 'web',
            ],
            [
                'id' => 3,
                'name' => 'Users Controls',
                'guard_name' => 'web',
            ],
            [
                'id' => 4,
                'name' => 'Pages Edit',
                'guard_name' => 'web',
            ],
        ]);
    }
}
