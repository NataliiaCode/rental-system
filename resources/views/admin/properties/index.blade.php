@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Нерухомість</h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.properties.create') }}" class="btn btn-warning btn-sm">Створити нову нерухомість</a>
        </div>

        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr class="table-row">
                    <th scope="col" class="table-cell">ID</th>
                    <th scope="col" class="table-cell">Тип</th>
                    <th scope="col" class="table-cell">Місто</th>
                    {{-- <th scope="col" class="table-cell">Опис</th>
                    <th scope="col" class="table-cell">Кімнати</th>
                    <th scope="col" class="table-cell">Ванні</th>
                    <th scope="col" class="table-cell">Площа</th> --}}
                    <th scope="col" class="table-cell">Опис</th>
                    {{-- <th scope="col" class="table-cell">Реновація</th>
                    <th scope="col" class="table-cell">Стан</th> --}}
                    <th scope="col" class="table-cell">Доступність</th>
                    <th scope="col" class="table-cell text-center">Зображення</th>

                    <th scope="col" class="table-cell text-center">Дії</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->propertyType->name }}</td>
                        <td>{{ $property->region->name }}</td>
                        <td>{{ $property->description }}</td>
                        {{-- <td>{{ $property->rooms }}</td>
                        <td>{{ $property->bathrooms }}</td>
                        <td>{{ $property->square_footage }}</td>
                        <td>{{ $property->price }}</td> --}}
                        {{-- <td>{{ $property->is_renovated ? 'Так' : 'Ні' }}</td>
                        <td>{{ $property->condition}}</td> --}}
                        <td>{{ $property->availability }}</td>
                        <td class="text-center"><img src="{{ $property->image }}" alt="Нерухомість" class="img-fluid"
                                style="max-width: 100px;"></td>
                        {{-- <td class="text-center"><img src="{{ asset('properties/' . $property->image) }}" alt="Нерухомість"
                                class="img-fluid" style="max-width: 100px;"></td> --}}









                        <td class="text-center">
                            <a href="{{ route('properties.show', $property->id) }}" class="btn btn-primary btn-sm mr-2">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('admin.properties.edit', $property->id) }}"
                                class="btn btn-warning btn-sm mr-2">
                                <i class="bi bi-pencil-square color-white"></i>
                            </a>

                            {{-- Кнопка видалення нерухомості --}}

                            {{-- <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Ви впевнені, що хочете видалити цю нерухомість?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form> --}}

                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deletePropertyModal{{ $property->id }}">
                                <i class="bi bi-trash"></i>
                            </button>

                            <!-- Модальне вікно для видалення -->
                            <div class="modal fade" id="deletePropertyModal{{ $property->id }}" tabindex="-1"
                                aria-labelledby="deletePropertyModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deletePropertyModalLabel">Видалення нерухомості</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Ви впевнені, що хочете видалити цю нерухомість?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Скасувати</button>
                                            <form action="{{ route('admin.properties.destroy', $property->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Видалити</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
    <div class="container mt-5"> </div> <!-- Added container with mt-5 for bottom spacing -->
@endsection
@section('title', 'Нерухомість')
