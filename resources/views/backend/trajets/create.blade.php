<!DOCTYPE html>
<html>
<head>
    <title>Créer un Trajet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Créer un Trajet</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('trajet.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="departure">Départ</label>
                <input type="text" class="form-control" id="departure" name="departure" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" required>
            </div>
            <div class="form-group">
                <label for="departure_time">Heure de Départ</label>
                <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" required>
            </div>
            <div class="form-group">
                <label for="arrival_time">Heure d'Arrivée</label>
                <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" required>
            </div>
            <div class="form-group">
                <label for="chauffeur_id">ID du Chauffeur</label>
                <input type="number" class="form-control" id="chauffeur_id" name="chauffeur_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>
</html>
