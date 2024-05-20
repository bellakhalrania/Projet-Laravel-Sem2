<!DOCTYPE html>
<html>
<head>
    <title>Liste des Trajets</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Trajets</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Départ</th>
                    <th>Destination</th>
                    <th>Heure de Départ</th>
                    <th>Heure d'Arrivée</th>
                    <th>ID du Chauffeur</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trajets as $trajet)
                    <tr>
                        <td>{{ $trajet->id }}</td>
                        <td>{{ $trajet->departure }}</td>
                        <td>{{ $trajet->destination }}</td>
                        <td>{{ $trajet->departure_time }}</td>
                        <td>{{ $trajet->arrival_time }}</td>
                        <td>{{ $trajet->chauffeur_id }}</td>
                        <td>
                            <form action="{{ route('trajet.destroy', $trajet->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce trajet ?');">Supprimer</button>
                            </form>
                            <a href="{{ route('trajet.edit', $trajet->id) }}" class="btn btn-warning">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
