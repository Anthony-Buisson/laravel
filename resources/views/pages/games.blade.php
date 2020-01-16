@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Tous les jeux</h1>
            <div>
                <ul>
                    @foreach($games as $game)
                        <li>
                            <a href="{{ route('game_details', ['game_id' => $game->id]) }}">
                                {{ $game->name }}
                            </a>
                            développé par {{ $game->developper ? $game->developper->name : 'inconnu'}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
