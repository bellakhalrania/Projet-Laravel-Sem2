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
<style>
.container {
 
    margin: 50px auto;
    padding: 30px;
    border-radius: 15px;
    background-color: #fff;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
    font-family: 'Arial', sans-serif;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    color: #555;
}

input[type="text"],
select {
    width: calc(100% - 24px); /* compenser la largeur du padding */
    padding: 12px;
    border: none;
    border-radius: 8px;
    background-color: #f2f2f2;
    transition: background-color 0.3s;
    font-family: 'Arial', sans-serif;
}

input[type="text"]:focus,
select:focus {
    background-color: #fff;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.btn-primary {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background-color: #c1b5f9; /* Soft Orange */
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Arial', sans-serif; /* Jolie police */
}

.btn-primary:hover {
    background-color: #9389c0; /* Softer Orange */
}
</style>
@endsection