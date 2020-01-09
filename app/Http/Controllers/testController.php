<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $games = DB::table('games')->get();

        return view('pages.games', [
            'games' => $games,
            'companyname' => '<strong>ICWT</strong>'
        ]);
    }
}
