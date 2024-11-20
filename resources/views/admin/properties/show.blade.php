@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $property->propertyType->name }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $property->image }}" alt="{{ $property->description }}" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h4 class="card-title">Опис</h4>
                                <p class="card-text">{{ $property->description }}</p>
                                <ul class="list-group">
                                    <li class="list-group-item"><strong>ID:</strong> {{ $property->id }}</li>

                                    <li class="list-group-item"><strong>Регіон:</strong> {{ $property->region->name }}</li>
                                    <li class="list-group-item"><strong>Кімнати:</strong> {{ $property->rooms }}</li>
                                    <li class="list-group-item"><strong>Ванні:</strong> {{ $property->bathrooms }}</li>
                                    <li class="list-group-item"><strong>Площа:</strong> {{ $property->square_footage }} м²
                                    </li>
                                    <li class="list-group-item"><strong>Ціна:</strong> {{ $property->price }} грн</li>
                                    <li class="list-group-item"><strong>Реновація:</strong>
                                        {{ $property->is_renovated ? 'Так' : 'Ні' }}</li>
                                    <li class="list-group-item"><strong>Стан:</strong>
                                        {{ $property->condition ? 'Так' : 'Ні' }}</li>
                                    <li class="list-group-item"><strong>Доступність:</strong> {{ $property->availability }}
                                    </li>
                                </ul>
                            </div>
                            <!-- Кнопка "Обрані" -->

                            <form name="buy">
                                @csrf
                                {{-- <input type="number" name="quantity" value="1" min="1"> --}}
                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <button>Buy</button>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
