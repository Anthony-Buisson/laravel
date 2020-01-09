@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Tous les jeux</h1>
            <div>
                <ul>
                    @foreach($games as $game)
                        <li>{{ $game->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
