<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            'name' => 'One X'
        ]);
        DB::table('platforms')->insert([
            'name' => 'PS4'
        ]);
        DB::table('platforms')->insert([
            'name' => 'PC'
        ]);
    }
}
