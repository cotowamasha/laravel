@extends('layouts.welcome')

@section('content')
    <div class="container">
        <div class="index__box">
            <form
                action="/"
                class="form-add">
                <p class="form-add__text">
                    Your e-mail
                </p>
                <input
                    type="text"
                    placeholder="email@mail.ru"
                    class="form-add__input"
                >
                <p class="form-add__text">
                    Your password
                </p>
                <input
                    type="password"
                    placeholder="***"
                    class="form-add__input"
                >
            </form>
        </div>
    </div>
@endsection
