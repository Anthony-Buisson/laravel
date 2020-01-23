<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Paul',
            'email' => 'Paul@gmail.com',
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'role' => \App\User::ROLE_ADMIN,
            'password' => bcrypt('123456')
        ]);
        DB::table('users')->insert([
            'name' => 'Pro',
            'email' => 'Pro@gmail.com',
            'role' => \App\User::ROLE_PRO,
            'password' => bcrypt('123456')
        ]);

        factory(\App\User::class, 2000)->create();
    }
}
