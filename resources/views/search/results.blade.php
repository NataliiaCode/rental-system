@extends('layouts.app')


@section('content')
    @include('search.search_form')

    <div class="container mt-4">
        <h1 class="text-center mb-4">Результати пошуку</h1>

        @if (count($properties) > 0)
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($properties as $property)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $property->image }}" class="card-img-top" alt="{{ $property->description }}"
                                style="max-height: 280px">
                            <div class="card-body">
                                <h5 class="card-title text-center text-success">{{ $property->propertyType->name }}</h5>
                                <p class="card-text">
                                    <i class="bi bi-geo-alt-fill"></i> {{ $property->region->name }}
                                </p>
                                <p class="card-text">
                                    <i class="bi bi-wallet-fill"></i> {{ $property->price }} грн

                                </p>
                                <a href="{{ route('properties.show', $property->id) }}"
                                    class="btn btn-warning rounded-pill">Деталі<i class="bi bi-chevron-right"></i></a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">Не знайдено результатів пошуку.</p>
        @endif
        {{-- <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-warning btn-lg">На головну</a>

        </div> --}}
    </div>
    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->
@endsection

@section('title', 'Результати пошуку')
