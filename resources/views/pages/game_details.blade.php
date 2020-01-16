@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Détail du jeu {{$game->name}}</h1>
            <div>
                <div>développé par {{ $game->developper->name }}</div>
                <div>Disponible sur {{ $game->platforms->pluck('name')->implode(', ') }}</div>
            </div>
        </div>
    </div>
@endsection
