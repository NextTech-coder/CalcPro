@extends('layouts.admin')
@section('title', 'Создать Калькулятор')

@section('content')
    <section class="admin-calcus">
        <h1>Создать</h1>

        <form  method="POST">
            @csrf
            <label for="name">
                Название
                <input type="text" name="name" id="name">
            </label>
            <label for="slug">
                Slug
                <input type="text" name="slug" id="slug">
            </label>
            <label for="hash">
                Hash Калькулятор
                <input type="text" name="hash" id="hash">
            </label>
            <label for="description">
                Описание
                <textarea name="description" id="description"></textarea>
            </label>
            <div id="editor"></div>

            <button type="submit">Сохранить</button>
        </form>
    </section>
@endsection

@section('scripts')
    @vite(['resources/js/edit.js'])
@endsection
