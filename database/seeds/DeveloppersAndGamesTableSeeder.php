<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeveloppersAndGamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idGB = DB::table('developpers')->insertGetId([
            'name' => 'Gearbox'
        ]);
        $idUB = DB::table('developpers')->insertGetId([
            'name' => 'Ubisoft'
        ]);
        $idMJ = DB::table('developpers')->insertGetId([
            'name' => 'Mojang'
        ]);
        $idND = DB::table('developpers')->insertGetId([
            'name' => 'Naughty Dog'
        ]);


        $idB3 = DB::table('games')->insertGetId([
            'name' => 'Borderlands 3',
            'developper_id' => $idGB,
        ]);
        $idLOU = DB::table('games')->insertGetId([
            'name' => 'The Last of US',
            'developper_id' => $idND,
        ]);
        $idMC = DB::table('games')->insertGetId([
            'name' => 'Minecraft',
            'developper_id' => $idMJ,
        ]);
        $idAC = DB::table('games')->insertGetId([
            'name' => 'Assassin\'s Creed 58',
            'developper_id' => $idUB,
        ]);
        $idWD = DB::table('games')->insertGetId([
            'name' => 'Watch Dogs 12',
            'developper_id' => $idUB,
        ]);

        for($i = 1; $i < 4; $i++)
            DB::table('game_platform')->insertGetId([
                'game_id' => $idMC,
                'platform_id' => $i,
            ]);
        foreach ([$idMC, $idWD, $idAC, $idB3, $idLOU] as $game_id)
            for($i = 1; $i < 4; $i++)
                DB::table('game_platform')->insertGetId([
                    'game_id' => $game_id,
                    'platform_id' => $i,
                ]);
    }
}
