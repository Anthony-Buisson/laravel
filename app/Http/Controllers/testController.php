<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Game;
use App\Developper;
class testController extends Controller
{
    public function hello($param = 'world'){
        return view('pages.hello', [
            'firstprice' => 23,
            'secondprice' => 42,
            'companyname' => '<strong>ICWT</strong>'
        ]);
    }

    public function games(){
        //$games = DB::table('games')->get();
        $games = Game::get();

        return view('pages.games', [
            'games' => $games,
            'companyname' => '<strong>ICWT</strong>'
        ]);
    }

    public function developpers(){
        // $developpers = Developper::with('games.platforms')->get();
        $developpers = Developper::with('games.platforms')->has('games')->get();

        return view('pages.developpers', [
            'developpers' => $developpers,
            'companyname' => '<strong>ICWT</strong>'
        ]);
    }

    public function users($page = 1){
        $users = User::paginate(10);

        return view('pages.users', [
            'users' => $users
        ]);
    }
}
