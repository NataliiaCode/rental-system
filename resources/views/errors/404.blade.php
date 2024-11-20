@extends('layouts.app')

@section('content')
    <section class="section-lg bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="display-4 text-warning font-weight-bold mb-4">404</h1>
                    <h2 class="mb-3">Вибачте, але сторінку не знайдено.</h2>
                    <p class="lead mb-4">Упс, перевірте чи немає помилок в адресі сторінки.</p>

                    <div class="btn-group">
                        <a href="{{ route('home') }}" class="btn btn-warning btn-lg">На головну</a>
                        <a href="{{ route('contacts') }}" class="btn btn-outline-warning btn-lg ml-2">Контакти</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('title', '404 - Сторінку не знайдено')
