@extends('layouts.app')
@section('title', 'Описание Главной страницы')
@section('description', 'Главная страница')
@section('content')
    <div class="container py-5">
        <div class="hero-section mb-5 text-center">
            <h1>Выберите нужный калькулятор</h1>
            <p>Быстрые и удобные инструменты для расчётов</p>
        </div>

        <div class="row g-4">
            <!-- Калькуляторы здоровья -->
            <div class="col-md-4">
                <a href="{{ route('calculators.health') }}" class="text-decoration-none">
                    <div class="card calculator-card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
                            <h5 class="card-title">Калькуляторы здоровья</h5>
                            <p class="card-text text-muted">BMI, калории, пульс, водный баланс и др.</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Кредитный калькулятор -->
            <div class="col-md-4">
                <a href="" class="text-decoration-none">
                    <div class="card calculator-card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-hand-holding-usd fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Кредитный калькулятор</h5>
                            <p class="card-text text-muted">Рассчитайте платежи, проценты и переплату</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Инвестиционный калькулятор -->
            <div class="col-md-4">
                <a href="" class="text-decoration-none">
                    <div class="card calculator-card h-100 text-center">
                        <div class="card-body">
                            <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Инвестиционный калькулятор</h5>
                            <p class="card-text text-muted">Доходность, сложный процент и прогноз</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection("content")
