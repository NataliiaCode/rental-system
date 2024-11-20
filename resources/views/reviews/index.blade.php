@extends('layouts.app')
@section('content')

    <!-- Section Title Breadcrumbs-->
    <section class="section-full bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="mb-4">Відгуки</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-warning">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Відгуки</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="section-lg text-center text-md-start bg-clients">
        <div class="container">

            <p class="text-dark">Всього відгуків: {{ $reviews->count() }}</p>
            <hr class="bg-white mb-5">

            <div class="row flow-offset-1 clearleft-custom-2">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-white">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-uppercase">Фото</th>
                                    <th scope="col" class="text-uppercase">Об'єкт</th>
                                    <th scope="col" class="text-uppercase">Коментар</th>
                                    <th scope="col" class="text-uppercase">Автор</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $review)
                                    <tr>
                                        <td>
                                            <img src="{{ $review->property->image }}" alt="{{ $review->property->name }}"
                                                width="100" height="100" class="rounded-circle">
                                        </td>
                                        <td>
                                            {{ $review->property->name }} -
                                            {{ $review->property->propertyType->name }} -
                                            {{ $review->property->rooms }} кімнат,
                                            ({{ $review->property->region->name }},
                                            {{ $review->property->price }} грн)
                                        </td>
                                        <td>{{ $review->comment }}</td>
                                        <td class="text-success">{{ $review->author }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                @auth
                    <a href="{{ route('reviews.create') }}" class="btn btn-lg rounded-pill">Додати відгук</a>
                @else
                    <p class="text-success">Щоб додати відгук, увійдіть у свій профіль.</p>
                @endauth
            </div>

        </div>
    </section>
    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->
@endsection

@section('title', 'Reviews')
