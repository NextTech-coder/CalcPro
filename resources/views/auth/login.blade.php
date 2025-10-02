@extends('layouts.app')
@section('title', 'Вход на сайт')
@section('description', 'Вход на сайт')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="auth-card calculator-card p-5 text-center" style="max-width: 420px; width: 100%;">
            <h2 class="mb-4 text-primary fw-bold">Добро пожаловать!</h2>
            <p class="text-muted mb-4">Войдите в свой аккаунт, чтобы продолжить</p>

            <form method="POST">
                @csrf
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                </div>

                <div class="mb-4 text-start">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <button type="submit" class="btn btn-login w-100 mb-3">Войти</button>

                <a href="{{ route('register.create') }}" class="btn btn-register w-100">Создать аккаунт</a>
            </form>
        </div>
    </div>
@endsection("content")
