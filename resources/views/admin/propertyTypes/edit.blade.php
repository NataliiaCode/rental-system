@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Редагувати тип нерухомості</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.propertyTypes.update', $propertyType->id) }}" method="POST"
                    class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Назва:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $propertyType->name }}" required>
                        <div class="invalid-feedback">
                            Будь ласка, введіть назву.
                        </div>
                    </div> <hr>

                    <button type="submit" class="btn btn-warning">Зберегти</button>
                </form>
            </div>
        </div>
    </div>
@endsection
