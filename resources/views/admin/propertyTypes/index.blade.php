@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Типи нерухомості</h1>

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.propertyTypes.create') }}" class="btn btn-warning">Створити новий тип нерухомості</a>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва</th>
                    <th scope="col" class="text-center">Дії</th> <!-- Додано class="text-center" -->
                </tr>
            </thead>
            <tbody>
                @foreach ($propertyTypes as $propertyType)
                    <tr>
                        <th scope="row">{{ $propertyType->id }}</th>
                        <td>{{ $propertyType->name }}</td>
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('admin.propertyTypes.edit', $propertyType->id) }}"
                                class="btn btn-warning btn-sm mr-2"><i class="bi bi-pencil-square color-white"></i></a>

                            <!-- Модальна форма -->
                            <div class="modal fade" id="deletePropertyTypeModal{{ $propertyType->id }}" tabindex="-1"
                                aria-labelledby="deletePropertyTypeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deletePropertyTypeModalLabel">Видалення типу
                                                нерухомості</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Ви впевнені, що хочете видалити тип нерухомості "{{ $propertyType->name }}"?
                                                Ця дія незворотна.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Скасувати</button>
                                            <form action="{{ route('admin.propertyTypes.destroy', $propertyType->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Видалити</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Кнопка для відкриття модальних вікон -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#deletePropertyTypeModal{{ $propertyType->id }}"><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

@endsection

@section('title', 'Property types')
