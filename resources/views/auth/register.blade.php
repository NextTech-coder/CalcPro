@extends('layouts.app')
@section('title', 'Регистарция')
@section('description', 'Новая регистрация')
@section('content')
    <div class="d-flex justify-content-center align-items-center">
        <div class="auth-card calculator-card p-5 text-center" style="max-width: 420px; width: 100%;">
            <h2 class="mb-4 text-primary fw-bold">Регистрация</h2>
            <p class="text-muted mb-4">Создайте аккаунт, чтобы начать</p>

            <form method="POST" action="">
                @csrf
                <div class="mb-3 text-start">
                    <label for="name" class="form-label">Имя</label>
                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                </div>

                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-4 text-start">
                    <label for="password" class="form-label">Пароль</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <button type="submit" class="btn btn-register w-100 mb-3">Зарегистрироваться</button>

                <a href="{{ route('login.create') }}" class="btn btn-login w-100">Уже есть аккаунт?</a>
            </form>
        </div>
    </div>
@endsection("content")
