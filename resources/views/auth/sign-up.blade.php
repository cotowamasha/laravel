@extends('layouts.welcome')

@section('content')
    <div class="container">
        <div class="create__box">
            <form
                action="register"
                method="post"
                class="form-add">
                @csrf
                <p class="form-add__text">
                    Your Firstname
                </p>
                <input
                    type="text"
                    name="name"
                    placeholder="Marri"
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
                    placeholder="email@mail.ru"
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
                    Your password
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
                    Repeat password
                </p>
                <input
                    type="password"
                    name="password_confirmation"
                    placeholder="***"
                    class="form-add__input"
                >
                <button class="form-add__btn">
                    Sign up
                </button>
            </form>
        </div>
    </div>
@endsection
