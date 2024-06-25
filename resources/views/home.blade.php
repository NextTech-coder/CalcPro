@extends("layouts.app")
@section("title", "Описание Главной страницы")
@section("description", "Главная страница")
@section("content")
    <section class="calculate">
        <div class="container">
            <div class="calculate__item">
                <div class="calculate__header">
                    Калькуляторы для здоровья
                </div>
                <ul>
                    @foreach($calculators as $calculator)
                        <li>
                            <a href="{{ route('calculator.show', ['slug' => $calculator->slug]) }}">{{ $calculator->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection("content")
