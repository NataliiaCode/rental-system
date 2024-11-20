@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm rounded">
                    <div class="card-header bg-warning text-dark text-center font-weight-bold">Додати відгук</div>

                    <div class="card-body">
                        <form action="{{ route('reviews.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="property_id">Об'єкт:</label>
                                <select name="property_id" id="property_id" class="form-control">
                                    @foreach ($properties as $property)
                                        <option value="{{ $property->id }}">
                                            {{ $property->name }} - {{ $property->propertyType->name }} -
                                            {{ $property->rooms }} кімнат,
                                            ({{ $property->region->name }}, {{ $property->price }} грн)
                                        </option>
                                    @endforeach
                                </select>
                                @error('property_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="comment">Коментар:</label>
                                <textarea name="comment" id="comment" class="form-control" rows="3"></textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> <hr>

                            <button type="submit" class="btn btn-warning">Додати відгук</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
