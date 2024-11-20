@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm rounded">
                    <div class="card-header bg-light p-3">
                        {{-- <div class="d-flex align-items-center">
                            <h2 class="card-title font-weight-bold mb-0 me-3">{{ $property->propertyType->name }}</h2>
                            <form name="buy" class="col-auto">
                                @csrf
                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <button type="submit" class="btn btn-warning rounded-pill mx-2">
                                    В обрані
                                </button>
                            </form>
                        </div> --}}
                        <div class="d-flex justify-content-center align-items-center">
                            <h2 class="card-title font-weight-bold mb-0 me-3">{{ $property->propertyType->name }} комфорт
                                класу, місто {{ $property->region->name }}</h2>
                            <form name="buy" class="col-auto">
                                @csrf
                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <button type="submit" class="btn btn-warning rounded-pill mx-2">
                                    В обрані
                                </button>
                            </form>
                        </div>

                    </div>

                    <div class="card-body p-4">
                        <div class="row">
                            {{-- <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="object-showcase-id mb-2">
                                        <div class="object-showcase-id-value">ID: {{ $property->id }}</div>
                                    </div>
                                    <img src="{{ $property->image }}" alt="{{ $property->description }}"
                                        class="img-fluid rounded" style="max-height: 400px; object-fit: cover;">
                                </div>
                                @if ($property->images)


                               
                                    <div class="mt-3 row">
                                        @foreach ($property->images->take(3) as $key => $image)
                                            <div class="col-md-4 mb-3">
                                                <a href="{{ asset('storage/' . $image->path) }}" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal{{ $key }}">
                                                    <img src="{{ asset('storage/' . $image->path) }}"
                                                        class="img-fluid rounded" alt="Зображення {{ $key + 1 }}"
                                                        style="height: 150px; object-fit: cover;">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>


                                    <!-- Модальне вікно для великого зображення -->
                                    @foreach ($property->images as $key => $image)
                                        <div class="modal fade" id="imageModal{{ $key }}" tabindex="-1"
                                            aria-labelledby="imageModalLabel{{ $key }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $image->path) }}"
                                                            class="img-fluid w-100" alt="Зображення {{ $key + 1 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div> --}}

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <div class="object-showcase-id mb-2 d-flex align-items-center"> <span
                                            class="fw-bold text-muted me-2">ID:</span> <span
                                            class="object-showcase-id-value fw-bold text-muted">{{ $property->id }}</span>
                                    </div>
                                    <img src="{{ $property->image }}" alt="{{ $property->description }}"
                                        class="img-fluid rounded" style="max-height: 445px; object-fit: cover;">
                                </div>
                                @if ($property->images)
                                    {{-- <div class="mt-3 row">
                                        @foreach ($property->images->take(3) as $key => $image)
                                            <div class="col-md-4 mb-3">
                                                <a href="{{ asset('storage/' . $image->path) }}" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal{{ $key }}">
                                                    <img src="{{ asset('storage/' . $image->path) }}"
                                                        class="img-fluid rounded" alt="Зображення {{ $key + 1 }}"
                                                        style="height: 150px; object-fit: cover;">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div> --}}
                                    <div class="mt-3 row">
                                        @foreach ($property->images->take(3) as $key => $image)
                                            <div class="col-6 col-md-4 mb-3">
                                                <a href="{{ asset('storage/' . $image->path) }}" data-bs-toggle="modal"
                                                    data-bs-target="#imageModal{{ $key }}">
                                                    <img src="{{ asset('storage/' . $image->path) }}"
                                                        class="img-fluid rounded" alt="Зображення {{ $key + 1 }}"
                                                        style="height: 150px; object-fit: cover;">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Модальне вікно для великого зображення -->
                                    @foreach ($property->images as $key => $image)
                                        <div class="modal fade" id="imageModal{{ $key }}" tabindex="-1"
                                            aria-labelledby="imageModalLabel{{ $key }}" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="{{ asset('storage/' . $image->path) }}"
                                                            class="img-fluid w-100" alt="Зображення {{ $key + 1 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="col-md-6">
                                <div class="property-details p-4 rounded shadow-sm bg-white">
                                    {{-- <h5 class="card-title font-weight-bold mb-3">Деталі</h5> --}}
                                    {{-- <p class="card-text"><strong>Ціна:</strong> {{ $property->price }} грн</p>
                                    <p class="card-text"><strong>Адреса:</strong> {{ $property->region->name }}</p> --}}
                                    <div class="object-showcase-details-item">
                                        <span class="object-showcase-details-title fw-bold text-secondary fs-5">Ціна:</span>
                                        <span class="object-showcase-details-value">{{ $property->price }} грн</span>
                                    </div>

                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-building fs-3 me-2"></i>
                                                    <span>{{ $property->propertyType->name }}</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-door-open fs-3 me-2"></i>
                                                    <span>{{ $property->rooms }} кімнат</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-rulers fs-3 me-2"></i>
                                                    <span>{{ $property->square_footage }} м<sup>2</sup></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-hand-thumbs-up fs-3 me-2"></i>
                                                    <span>Дизайнерський ремонт</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-fire fs-3 me-2"></i>
                                                    <span>Автономне (котельня в будинку)</span>
                                                </li>
                                                <li class="d-flex align-items-center mb-3">
                                                    <i class="bi bi-tree fs-3 me-2"></i>
                                                    <span>Зелене подвір'я</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="object-showcase-tags mt-3 mb-3">
                                        <div class="tag-list d-flex flex-wrap gap-2">
                                            <div class="tag-list-item flex-grow-1">
                                                <div class="tag bg-warning text-dark rounded-pill px-3 py-2">
                                                    <div class="tag-value">Відкрита територія</div>
                                                </div>
                                            </div>
                                            <div class="tag-list-item flex-grow-1">
                                                <div class="tag bg-warning text-dark rounded-pill px-3 py-2">
                                                    <div class="tag-value">Підземний паркінг</div>
                                                </div>
                                            </div>
                                            <div class="tag-list-item flex-grow-1">
                                                <div class="tag bg-warning text-dark rounded-pill px-3 py-2">
                                                    <div class="tag-value">Дитячий майданчик</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <p class="card-text"><strong>Опис:</strong> {{ $property->description }}</p>
                                    <p class="card-text"><strong>Ванна кімната:</strong> {{ $property->bathrooms }}</p>
                                    <p class="card-text"><strong>Реновація:</strong>
                                        {{ $property->is_renovated ? 'Так' : 'Ні' }}</p>

                                    {{-- <p class="card-text"><strong>Стан:</strong> {{ $property->condition ? 'Так' : 'Ні' }}
                                    </p>
                                    <p class="card-text"><strong>Доступність:</strong> {{ $property->availability }}</p> --}}

                                    <p class="card-text"><strong>Стан:</strong>
                                        @switch($property->condition)
                                            @case('Excellent')
                                                Відмінно
                                            @break

                                            @case('Good')
                                                Добре
                                            @break

                                            @case('Poor')
                                                Погано
                                            @break

                                            @default
                                                Невідомо
                                        @endswitch
                                    </p>

                                    <p class="card-text"><strong>Доступність:</strong>
                                        @if ($property->availability === 'Available')
                                            Доступно
                                        @else
                                            Не доступно
                                        @endif
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="section-lg py-5">
        <div class="container bg-image p-5" style="background-image: url({{ asset('images/cactus1.jpg') }});">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="mb-4 text-center">
                        <i class="fas fa-info-circle fa-2x text-warning"></i>
                        <h2 class="display-6">Дізнатися про об’єкт</h2>
                    </div>
                    <p class="mb-4 text-center lead">Найближчим часом наш менеджер зв’яжеться з Вами!</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('sendEmail') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Ім'я</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Номер телефону</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                id="phone" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Електронна пошта</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Повідомлення</label>
                            <textarea class="form-control" id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Надіслати заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('title', 'Об’єкт')
