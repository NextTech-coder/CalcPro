@extends('layouts.app')
@section("title", "Вход на сайт")
@section("description", "Вход на сайт")
@section("content")
    <section class="register">
        <div class="container">
            <h1>Вход на сайт</h1>
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <label for="email">
                    E-mail
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </label>
                <label for="password">
                    Пароль
                    <input type="password" name="password" id="password">
                </label>
                <div class="btn__group">
                    <label for="remember" class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <p>Запомнить меня?</p>
                    </label>
                    <button type="submit">Вход</button>
                    <a href="{{ route('register.create') }}">Регистарция >>></a>
                </div>
            </form>
        </div>
    </section>
@endsection("content")
