@extends('layouts.app')

@section('content')
    <h1>Тип нерухомості</h1>

    <p>ID: {{ $propertyType->id }}</p>
    <p>Назва: {{ $propertyType->name }}</p>
    <p>Опис: {{ $propertyType->description }}</p>
@endSection
