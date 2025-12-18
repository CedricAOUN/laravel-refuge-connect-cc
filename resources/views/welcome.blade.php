@extends('layouts.app')

@section('content')
<div>
    <h1>Nos animaux</h1>
    <div class="animal-list">
        @forelse ($animals as $animal)
        <x-animal-card :animal="$animal" />
        @empty
        <p>Aucun animal disponible pour le moment.</p>
        @endforelse
    </div>
</div>
@endsection