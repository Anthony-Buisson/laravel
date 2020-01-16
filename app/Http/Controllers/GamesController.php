<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function getGame($game_id){
        $game = Game::findOrFail($game_id);


        return view('pages.game_details', [
            'game' => $game
        ]);
    }

    public function addGame(){

    }
}
