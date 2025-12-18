@extends('layouts.app')
@section('content')
<div>
    <h1>{{ $animal->name }}</h1>
    <img src="{{ $animal->photo }}" alt="Photo de {{ $animal->name }}" />
    <p>Espèce: {{ $animal->species }}</p>
    <p>Âge: {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
</div>
@endsection