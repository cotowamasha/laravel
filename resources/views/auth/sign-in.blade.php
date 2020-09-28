@extends('layouts.welcome')

@section('content')
    <div class="container">
        <div class="index__box">
            <form
                action="/login"
                method="post"
                class="form-add">
                @csrf
                <p class="form-add__text">
                    Your e-mail
                </p>
                <input
                    type="text"
                    name="email"
                    placeholder="email@mail.ru"
                    value="admin.admin@mail.ru"
                    class="form-add__input"
                >
                <p class="form-add__text">
                    Your password
                </p>
                <input
                    type="password"
                    name="password"
                    placeholder="***"
                    value="123"
                    class="form-add__input"
                >
                <div class="form-add__flex">
                    <button class="form-add__btn">
                        Sign In
                    </button>
                    <div>
                        <p class="form-add__text">
                            Not registered yet?
                        </p>
                        <a
                            href="/sign-up"
                            class="form-add__link"
                        >
                            registration
                        </a>
                    </div>
                </div>
            </form>
            <div class="socials">
                <p class="socials__text">
                    Sign in with:
                </p>
                <a href="/auth/vk">
                    <i class="fab fa-vk"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
