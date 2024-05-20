<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Trajet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier un Trajet</h2>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('trajet.update', $trajet->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="departure">Départ</label>
                <input type="text" class="form-control" id="departure" name="departure" value="{{ $trajet->departure }}" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" class="form-control" id="destination" name="destination" value="{{ $trajet->destination }}" required>
            </div>
            <div class="form-group">
                <label for="departure_time">Heure de Départ</label>
                <input type="datetime-local" class="form-control" id="departure_time" name="departure_time" value="{{ $trajet->departure_time->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="form-group">
                <label for="arrival_time">Heure d'Arrivée</label>
                <input type="datetime-local" class="form-control" id="arrival_time" name="arrival_time" value="{{ $trajet->arrival_time->format('Y-m-d\TH:i') }}" required>
            </div>
            <div class="form-group">
                <label for="chauffeur_id">ID du Chauffeur</label>
                <input type="number" class="form-control" id="chauffeur_id" name="chauffeur_id" value="{{ $trajet->chauffeur_id }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</body>
</html>
