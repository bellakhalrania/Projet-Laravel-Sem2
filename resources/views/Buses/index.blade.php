@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Bus</h1>
    <a href="{{ route('buses.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle-fill"></i> Ajouter un Bus
    </a>

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
                        <a href="{{ route('buses.show', $bus->id) }}" class="btn btn-info btn-icon"><i class="bi bi-eye-fill"></i> Voir</a>
                        <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-warning btn-icon"><i class="bi bi-pencil-fill"></i> Modifier</a>
                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-icon"><i class="bi bi-trash-fill"></i> Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<style>
    .btn-info .bi-eye-fill {
        color: blue; /* Couleur de l'icône "Voir" */
    }

    .btn-warning .bi-pencil-fill {
        color: orange; /* Couleur de l'icône "Modifier" */
    }

    .btn-danger .bi-trash-fill {
        color: red; /* Couleur de l'icône "Supprimer" */
    }

    .btn-primary .bi-plus-circle-fill {
        color: skyblue; /* Couleur de l'icône "Ajouter un Bus" */
    }
</style>
@endsection
