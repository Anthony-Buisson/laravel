@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Ajout d'un jeux</h1>
            <form action="{{ route('game_add_post')}}" method="post">
                @csrf

                <label for="">Nom</label>
                <input id="name" name="name" type="text" class="form-control col-lg-6">
                @if($errors->has('name'))
                    <span>{{ $errors->first('name') }}</span>
                @endif
                <label for="">PEGI</label>
                <input id="pegi" name="pegi" type="number" class="form-control col-lg-6">

                <label for="">Sortie physique</label>
                <input id="physical_release" name="physical_release" type="checkbox" class=""><br>

                <input type="submit" value="valider" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
