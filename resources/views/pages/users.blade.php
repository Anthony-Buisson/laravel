@extends('layouts.app')
@section('page_title', 'Hello !')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Tous les utilisateurs</h1>
            <div>
                <ul>
                    @foreach($users as $user)
                        <li>
                            <span>{{ $user->name  }}</span><span>{{ $user->email }}</span>
                        </li>
                        <!--$loop->last, $loop->odd, $loop->depth-->
                    @endforeach
                </ul>
            </div>
        </div>
        {{ $users->links() }}
    </div>
@endsection
