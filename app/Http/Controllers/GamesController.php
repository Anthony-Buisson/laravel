<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function getGame($game_id){
        $game = Game::findOrFail($game_id);


        return view('pages.game_details', [
            'game' => $game,
        ]);
    }

    public function addGame(){
        return view('pages.game_add');
    }

    public function addPostGame(Request $request){
        $this->validate($request, [
            'name' => 'required'
            ]);
            
        $game = new Game();
        $game->name = $request->input('name');
        $game->pegi = $request->input('pegi');
        $game->physical_release = $request->filled('physical_release');

        $game->save();

        return redirect()->route('games');
    }
}
