<div class="animal-card">
    <a class="animal-info" href="{{ route('animal.show', ['id' => $animal->id]) }}">
        <img src="{{ asset($animal->photo) }}" alt="Photo de {{ $animal->name }}" />
        <h2>{{ $animal->name }}</h2>
        <p>Espèce: {{ $animal->species }}</p>
        <p>Âge: {{ $animal->age }} ans</p>
        <p>{{ Str::limit($animal->description, 75) }}</p>
    </a>
    <div class="animal-card-actions">
        <a href="{{ route('animals.modify', ['id' => $animal->id]) }}">Modifier</a>
        <a href="{{ route('animals.delete', ['id' => $animal->id]) }}">Supprimer</a>
    </div>
</div>