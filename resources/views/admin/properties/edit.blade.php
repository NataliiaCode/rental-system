@extends('layouts.app')

@section('content')
    {{-- <div class="container mt-4">
        <h1 class="text-center mb-4">Редагувати нерухомість</h1>

        <form action="{{ route('admin.properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="property_type_id">Тип нерухомості:</label>
                    <select class="form-control" id="property_type_id" name="property_type_id" required>
                        @foreach ($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}"
                                {{ $property->property_type_id == $propertyType->id ? 'selected' : '' }}>
                                {{ $propertyType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="region_id">Регіон:</label>
                    <select class="form-control" id="region_id" name="region_id" required>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" {{ $property->region_id == $region->id ? 'selected' : '' }}>
                                {{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Опис:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $property->description }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Кімнати:</label>
                    <input type="number" class="form-control" id="rooms" name="rooms" value="{{ $property->rooms }}"
                        required>
                </div>
                <div class="form-group col-md-4">
                    <label for="bathrooms">Ванні:</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                        value="{{ $property->bathrooms }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="square_footage">Площа:</label>
                    <input type="number" class="form-control" id="square_footage" name="square_footage"
                        value="{{ $property->square_footage }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Ціна:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="is_renovated">Реновація:</label>
                    <select class="form-control" id="is_renovated" name="is_renovated" required>
                        <option value="1" {{ $property->is_renovated ? 'selected' : '' }}>Так</option>
                        <option value="0" {{ !$property->is_renovated ? 'selected' : '' }}>Ні</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condition">Стан:</label>
                    <select class="form-control" id="condition" name="condition" required>
                        <option value="Excellent" {{ $property->condition === 'Excellent' ? 'selected' : '' }}>Відмінно
                        </option>
                        <option value="Good" {{ $property->condition === 'Good' ? 'selected' : '' }}>Добре</option>
                        <option value="Poor" {{ $property->condition === 'Poor' ? 'selected' : '' }}>Погано</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="availability">Доступність:</label>
                    <select class="form-control" id="availability" name="availability" required>
                        <option value="Available" {{ $property->availability === 'Available' ? 'selected' : '' }}>Доступно
                        </option>
                        <option value="Unavailable" {{ $property->availability === 'Unavailable' ? 'selected' : '' }}>Не
                            доступно</option>
                    </select>
                </div>
            </div>



            <div class="form-group">
                <label for="image">Зображення:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($property->image)
                    <img src="{{ $property->image }}" alt="Нерухомість" class="img-fluid mt-2" style="max-width: 200px;">
                @endif
            </div>


            <div class="form-group">
                <label for="images">Додаткові зображення:</label>
                <input type="file" name="images[]" multiple>
                <div id="images-preview">
                    @foreach ($images as $image)
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Зображення" class="img-thumbnail"
                            style="max-width: 100px; max-height: 100px;">
                    @endforeach
                </div>
            </div>


            <button type="submit" class="btn btn-warning">Зберегти зміни</button>
            <button class="btn btn-secondary">Скасувати</button>
        </form>
    </div> --}}

    <div class="container mt-4">
        <h1 class="text-center mb-4">Редагувати нерухомість</h1>

        <form action="{{ route('admin.properties.update', $property->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="property_type_id">Тип нерухомості:</label>
                    <select class="form-control" id="property_type_id" name="property_type_id" required>
                        @foreach ($propertyTypes as $propertyType)
                            <option value="{{ $propertyType->id }}"
                                {{ $property->property_type_id == $propertyType->id ? 'selected' : '' }}>
                                {{ $propertyType->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="region_id">Регіон:</label>
                    <select class="form-control" id="region_id" name="region_id" required>
                        @foreach ($regions as $region)
                            <option value="{{ $region->id }}" {{ $property->region_id == $region->id ? 'selected' : '' }}>
                                {{ $region->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Опис:</label>
                <textarea class="form-control" id="description" name="description" required>{{ $property->description }}</textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rooms">Кімнати:</label>
                    <input type="number" class="form-control" id="rooms" name="rooms" value="{{ $property->rooms }}"
                        required>
                </div>
                <div class="form-group col-md-4">
                    <label for="bathrooms">Ванні:</label>
                    <input type="number" class="form-control" id="bathrooms" name="bathrooms"
                        value="{{ $property->bathrooms }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="square_footage">Площа:</label>
                    <input type="number" class="form-control" id="square_footage" name="square_footage"
                        value="{{ $property->square_footage }}" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="price">Ціна:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $property->price }}"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <label for="is_renovated">Реновація:</label>
                    <select class="form-control" id="is_renovated" name="is_renovated" required>
                        <option value="1" {{ $property->is_renovated ? 'selected' : '' }}>Так</option>
                        <option value="0" {{ !$property->is_renovated ? 'selected' : '' }}>Ні</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condition">Стан:</label>
                    <select class="form-control" id="condition" name="condition" required>
                        <option value="Excellent" {{ $property->condition === 'Excellent' ? 'selected' : '' }}>Відмінно
                        </option>
                        <option value="Good" {{ $property->condition === 'Good' ? 'selected' : '' }}>Добре</option>
                        <option value="Poor" {{ $property->condition === 'Poor' ? 'selected' : '' }}>Погано</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="availability">Доступність:</label>
                    <select class="form-control" id="availability" name="availability" required>
                        <option value="Available" {{ $property->availability === 'Available' ? 'selected' : '' }}>Доступно
                        </option>
                        <option value="Unavailable" {{ $property->availability === 'Unavailable' ? 'selected' : '' }}>Не
                            доступно</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="image">Головне зображення:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($property->image)
                    <img src="{{ $property->image }}" alt="Нерухомість" class="img-fluid mt-2" style="max-width: 200px;">
                @endif
            </div>
            {{-- <div class="form-group">
                <label for="image">Головне зображення:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($property->image)
                    <img src="{{ asset($property->image) }}" alt="Нерухомість" class="img-fluid mt-2"
                        style="max-width: 200px;">
                @endif
            </div> --}}


            {{-- <div class="form-group">
                <label for="images">Додаткові зображення:</label>
                <input type="file" name="images[]" multiple>
                <div id="images-preview">
                    @foreach ($property->images as $image)
                        <div class="image-item">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Зображення" class="img-thumbnail"
                                style="max-width: 100px; max-height: 100px;">
                            <button type="button" class="btn btn-danger btn-sm delete-image"
                                data-image-id="{{ $image->id }}">Видалити</button>
                            <input type="checkbox" name="delete_images[]" value="{{ $image->id }}"
                                style="display: none;">
                        </div>
                    @endforeach
                </div>
            </div> --}}

            <div class="form-group">
                <label for="images">Додаткові зображення:</label>
                <input type="file" name="images[]" multiple>
                <div id="images-preview">
                    {{-- @foreach ($property->images as $image)
                        <div class="image-item">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Зображення" class="img-thumbnail"
                                style="max-width: 100px; max-height: 100px;">
                            <form method="POST" action="{{ route('admin.properties.images.destroy', $image->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm delete-image">Видалити</button>
                            </form>

                        </div>
                    @endforeach --}}

                    {{-- @foreach ($property->images as $image)
                        <div class="image-item">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Зображення" class="img-thumbnail"
                                style="max-width: 100px; max-height: 100px;">
                            <input type="hidden" name="existing_images[{{ $image->id }}]" value="{{ $image->path }}">
                        </div>
                    @endforeach --}}

                    @foreach ($property->images as $image)
                        <div class="image-item">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Зображення" class="img-thumbnail"
                                style="max-width: 100px; max-height: 100px;">
                            <button type="button" class="btn btn-danger btn-sm delete-image"
                                data-image-id="{{ $image->id }}">Видалити</button>
                            <input type="hidden" name="images[]" value="{{ $image->id }}">
                        </div>
                    @endforeach


                </div>
            </div>

            <button type="submit" class="btn btn-primary">Зберегти зміни</button>
        </form>
    </div>

    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->
@endsection

{{-- <script>
    $(document).ready(function() {
        $('.delete-image').on('click', function() {
            // Видалення зображення з інтерфейсу
            $(this).parent().remove();

            // Видалення зображення з масиву 
            var imageId = $(this).data('image-id');
            $('input[name="images[]"][value="' + imageId + '"]').remove();
        });
    });
</script> --}}

@section('title', 'Редагувати нерухомість')
