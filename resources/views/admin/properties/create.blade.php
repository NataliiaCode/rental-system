@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Створити нову нерухомість</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.properties.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="property_type_id">Тип нерухомості:</label>
                    <select class="form-control" id="property_type_id" name="property_type_id" required>
                        @foreach ($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}">{{ $propertyType->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="region_id">Регіон:</label>
                    <select class="form-control" id="region_id" name="region_id" required>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Опис:</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Кімнати:</label>
                    <input type="number" class="form-control" id="rooms" name="rooms" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="bathrooms">Ванні:</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="square_footage">Площа:</label>
                    <input type="number" class="form-control" id="square_footage" name="square_footage" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Ціна:</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="is_renovated">Реновація:</label>
                    <select class="form-control" id="is_renovated" name="is_renovated" required>
                        <option value="1">Так</option>
                        <option value="0">Ні</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condition">Стан:</label>
                    <select class="form-control" id="condition" name="condition" required>
                        <option value="Excellent">Відмінно</option>
                        <option value="Good">Добре</option>
                        <option value="Poor">Погано</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="availability">Доступність:</label>
                    <select class="form-control" id="availability" name="availability" required>
                        <option value="Available">Доступно</option>
                        <option value="Unavailable">Не доступно</option>
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label for="image">Зображення:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>



            <div class="form-group">
                <label for="images">Додаткові зображення:</label>
                <input type="file" name="images[]" multiple>
                <div id="images-preview">
                    @if (old('images'))
                        @foreach (old('images') as $image)
                            <img src="{{ asset('storage/' . $image) }}" alt="Зображення">
                        @endforeach
                    @endif
                </div>
            </div>




            <button type="submit" class="btn btn-primary">Зберегти</button>
        </form>
    </div>
    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->
@endsection

@section('title', 'Створити нову нерухомість')
