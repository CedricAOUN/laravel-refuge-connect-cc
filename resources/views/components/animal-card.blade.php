<div class="animal-card">
    <img src="{{ $animal->photo }}" alt="Photo de {{ $animal->name }}" />
    <h2>{{ $animal->name }}</h2>
    <p>Espèce: {{ $animal->species }}</p>
    <p>Âge: {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
</div>