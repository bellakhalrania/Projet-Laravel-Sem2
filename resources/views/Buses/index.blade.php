<!-- resources/views/buses/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Bus</h1>
    <a href="{{ route('buses.create') }}" class="btn btn-primary mb-3">Ajouter un Bus</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Matricule</th>
                <th>Modèle</th>
                <th>Ligne</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Buses as $bus)
                <tr>
                    <td>{{ $bus->name }}</td>
                    <td>{{ $bus->matricule }}</td>
                    <td>{{ $bus->model }}</td>
                    <td>{{ $bus->line }}</td>
                    <td>{{ $bus->etat ? 'En service' : 'Hors service' }}</td>
                    <td>
                        <a href="{{ route('buses.show', $bus->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
