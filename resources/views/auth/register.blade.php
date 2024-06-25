@extends('layouts.app')
@section("title", "Регистарция")
@section("description", "Новая регистрация")
@section("content")
    <section class="register">
        <div class="container">
            <h1>Регистрация на сайте</h1>

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <label for="name">
                    Логин
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </label>
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
                    @error('password')
                    <p class="form-error">{{ $message }}</p>
                    @enderror
                </label>
                <label for="name">
                    Повторите пароль
                    <input type="password" name="password_confirmation" id="password">
                </label>
               <div class="btn__group">
                   <button type="submit">Регистрация</button>
                   <a href="{{ route('login.create') }}">Вход >>></a>
               </div>
            </form>
        </div>
    </section>
@endsection("content")
