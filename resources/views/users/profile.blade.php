@extends('layouts.welcome')

@section('content')
    <div class="container">
        <div class="create__box">
            @if ($success)
                <p class="create__ok">
                    {{ $success }}
                </p>
            @endif
            <form
                action="/profile"
                method="post"
                class="form-add">
                @csrf
                <p class="form-add__text">
                    Your Firstname
                </p>
                <input
                    type="text"
                    name="name"
                    value="{{ $user->name }}"
                    class="form-add__input"
                >
                @if ($errors->has('name'))
                    <div class="error-text">
                        @foreach($errors->get('name') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <p class="form-add__text">
                    Your e-mail
                </p>
                <input
                    type="text"
                    name="email"
                    value="{{ $user->email }}"
                    class="form-add__input"
                >
                @if ($errors->has('email'))
                    <div class="error-text">
                        @foreach($errors->get('email') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <p class="form-add__text">
                    Your old password
                </p>
                <input
                    type="password"
                    name="password"
                    placeholder="***"
                    class="form-add__input"
                >
                @if ($errors->has('password'))
                    <div class="error-text">
                        @foreach($errors->get('password') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <p class="form-add__text">
                    Your new password
                </p>
                <input
                    type="password"
                    name="password_new"
                    placeholder="***"
                    class="form-add__input"
                >
                @if ($errors->has('password_new'))
                    <div class="error-text">
                        @foreach($errors->get('password_new') as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <button class="form-add__btn">
                    Update data
                </button>
            </form>
        </div>
    </div>
@endsection
