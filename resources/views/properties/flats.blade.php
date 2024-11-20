@extends('layouts.app')

@section('content')
    <section class="section-lg text-center text-md-start bg-gray-dark pt-5 pb-5">
        <div class="container">
            <h1 class="text-center mb-4">Квартири</h1>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($flats as $property)
                    @if ($property->propertyType->name === 'Квартира')
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
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('title', 'Flats')
