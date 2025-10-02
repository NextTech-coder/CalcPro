@extends('layouts.app')
@section('title', 'Описание Главной страницы')
@section('description', 'Главная страница')
@section('content')
    <section class="calculate">
        <div class="container">
            <div class="hero-section">
                <h1><i class="fas fa-heartbeat"></i> Калькуляторы для здоровья</h1>
                <p>Следите за своим здоровьем с помощью наших удобных калькуляторов</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="calculator-card">
                        <h2 class="text-center mb-4" style="color: var(--primary-blue);">
                            <i class="fas fa-calculator me-2"></i>Выберите калькулятор
                        </h2>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-weight me-2" style="color: var(--accent-teal);"></i>
                                <strong>Калькулятор ИМТ</strong> - Индекс массы тела
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire me-2" style="color: var(--accent-orange);"></i>
                                <strong>Калькулятор калорий</strong> - Суточная норма
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-tint me-2" style="color: var(--accent-teal);"></i>
                                <strong>Водный баланс</strong> - Норма воды в день
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="fas fa-running me-2" style="color: var(--accent-orange);"></i>
                                <strong>Калькулятор активности</strong> - Расход калорий
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection("content")
