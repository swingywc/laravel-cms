<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class App\UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'id'       => 1,
            'name'     => env('BACKPACK_ADMIN_NAME'),
            'email'    => env('BACKPACK_ADMIN_EMAIL'),
            'password' => bcrypt(env('BACKPACK_ADMIN_PASSWORD')),
        ]);
    }
}
