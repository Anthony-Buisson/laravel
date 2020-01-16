@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Tous les jeux</h1>
            <div>
                <ul>
                    @foreach($developpers as $developper)
                    Jeux développés par {{ $developper->name }}
                    <ul>
                    @foreach($developper->games as $game)
                        <li>{{ $game->name }} disponible sur {{ $game->platforms->pluck('name')->implode(',') }}</li>
                        <!--$loop->last, $loop->odd, $loop->depth-->
                    @endforeach
                    </ul>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
