@extends('layouts.app')
@section('content')
    @include('search.search_form')

    <section class="section-lg text-center text-md-start bg-gray-dark">
        <div class="container">
            <h1 class="mb-4">Нерухомість</h1>
            {{-- <div class="d-flex justify-content-between mb-3">
                <a href="{{ route('sort', 'type') }}" class="btn btn-outline-warning btn-lg mr-2">Сортувати за типом</a>
                <a href="{{ route('sort', 'price') }}" class="btn btn-outline-warning btn-lg mr-2">Сортувати за ціною<i
                        class="bi bi-arrow-up"></i></a>
                <a href="{{ route('sort', 'price-desc') }}" class="btn btn-outline-warning btn-lg mr-2">Сортувати за
                    ціною<i class="bi bi-arrow-down"></i></a>
                <a href="{{ route('sort', 'date-desc') }}" class="btn btn-outline-warning btn-lg mr-2">Сортувати за
                    датою<i class="bi bi-arrow-down"></i></a>
                <a href="{{ route('sort', 'date-asc') }}" class="btn btn-outline-warning btn-lg mr-2">Сортувати за датою<i
                        class="bi bi-arrow-up"></i></a>
            </div> --}}


            {{-- Сортування нерухомості !!!! --}}
            <div id="properties-list">
                <div class="row mb-3">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 d-flex justify-content-end">
                        {{-- <a href="{{ route('sort', 'type') }}" class="btn btn-outline-warning btn-sm mx-1">За типом</a> --}}
                        <a href="{{ route('sort', 'price') }}" class="btn btn-outline-warning btn-sm mx-1">За ціною <i
                                class="bi bi-arrow-up"></i></a>
                        <a href="{{ route('sort', 'price-desc') }}" class="btn btn-outline-warning btn-sm mx-1">За ціною <i
                                class="bi bi-arrow-down"></i></a>
                        <a href="{{ route('sort', 'date-desc') }}" class="btn btn-outline-warning btn-sm mx-1">За датою <i
                                class="bi bi-arrow-down"></i></a>
                        <a href="{{ route('sort', 'date-asc') }}" class="btn btn-outline-warning btn-sm mx-1">За датою <i
                                class="bi bi-arrow-up"></i></a>

                    </div>
                </div>

            </div>



            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($properties as $property)
                    <div class="col">
                        <div class="card h-100">

                            {{-- Це ,якщо тільки вивести головне фото нерухомості --}}
                            {{-- <img src="{{ $property->image }}" class="card-img-top" alt="{{ $property->description }}"
                                style="max-height: 280px"> --}}

                            {{-- Слайдер, але дуже повільно працює --}}
                            <div id="carouselExampleIndicators{{ $property->id }}" class="carousel slide">
                                <div class="carousel-indicators">
                                    @foreach ($property->images as $key => $image)
                                        <button type="button"
                                            data-bs-target="#carouselExampleIndicators{{ $property->id }}"
                                            data-bs-slide-to="{{ $key }}" class="{{ $key === 0 ? 'active' : '' }}"
                                            aria-label="Slide {{ $key + 1 }}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($property->images as $key => $image)
                                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('storage/' . $image->path) }}" class="d-block w-100"
                                                alt="{{ $property->description }}" style="max-height: 280px">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $property->id }}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators{{ $property->id }}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>






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

        </div>

    </section>


    {{-- <button id="scrollToTopButton" class="btn btn-outline-warning btn-sm"
        style="position: fixed; right: 20px; bottom: 20px;">
        <i class="bi bi-chevron-up"></i>
    </button> --}}
    <button id="scrollToTopButton" class="btn btn-outline-warning btn-sm"
        style="position: fixed; right: 20px; bottom: 20px; z-index: 1000;">
        <i class="bi bi-chevron-up"></i>
    </button>

    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->

@endsection
@section('title', 'Home')
