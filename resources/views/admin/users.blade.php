@extends('layouts.welcome')

@section('content')
    <div class="container">
        <div class="create__box users">
            @foreach($users as $user)
                <div class="users__email">
                    {{ $user->email }}
                </div>
            @if ($user->is_admin)
                <p class="users__status">
                    Is admin, bro
                </p>
            @else
                <p class="users__status">
                    Common user
                </p>
            @endif
                <form action="/change/users/{{$user->id}}">
                    @if ($user->is_admin)
                        <button class="users__btn">
                            Make common
                        </button>
                    @else
                        <button class="users__btn">
                            Make admin
                        </button>
                    @endif
                </form>
            @endforeach
        </div>
    </div>
@endsection
