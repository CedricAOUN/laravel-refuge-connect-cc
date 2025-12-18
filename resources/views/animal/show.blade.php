@extends('layouts.app')
@section('content')
<h1>{{ $animal->name }}</h1>
<div class="animal-show">
    <img src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}" />
    <div class="animal-details">
        <p>Espèce: {{ $animal->species }}</p>
        <p>Âge: {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
    </div>
</div>
@endsection