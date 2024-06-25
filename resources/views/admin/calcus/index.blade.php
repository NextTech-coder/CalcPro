@extends('layouts.admin')
@section('title', 'Калькулятор')

@section('content')
    <section class="admin-calcus">
        <h1>Калькуляторы</h1>

        <div class="btn-group">
            <a href="{{ route('calcus.create') }}">Добавить</a>
        </div>
    </section>
@endsection
