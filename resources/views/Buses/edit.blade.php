<!-- resources/views/buses/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Bus</h1>
    <form action="{{ route('buses.update', $bus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" name="name" class="form-control" value="{{ $bus->name }}" required>
        </div>
        <div class="form-group">
            <label for="matricule">Matricule</label>
            <input type="text" name="matricule" class="form-control" value="{{ $bus->matricule }}" required>
        </div>
        <div class="form-group">
            <label for="model">Modèle</label>
            <input type="text" name="model" class="form-control" value="{{ $bus->model }}" required>
        </div>
        <div class="form-group">
            <label for="line">Ligne</label>
            <input type="text" name="line" class="form-control" value="{{ $bus->line }}" required>
        </div>
        <div class="form-group">
            <label for="etat">État</label>
            <select name="etat" class="form-control" required>
                <option value="1" {{ $bus->etat ? 'selected' : '' }}>En service</option>
                <option value="0" {{ !$bus->etat ? 'selected' : '' }}>Hors service</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
