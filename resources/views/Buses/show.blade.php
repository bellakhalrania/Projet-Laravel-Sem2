@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails du Bus</h1>
    <div class="card">
        <div class="card-header">
            {{ $bus->name }}
        </div>
        <div class="card-body">
            <p><strong>Matricule:</strong> {{ $bus->matricule }}</p>
            <p><strong>Modèle:</strong> {{ $bus->model }}</p>
            <p><strong>Ligne:</strong> {{ $bus->line }}</p>
            <p><strong>État:</strong> {{ $bus->etat ? 'En service' : 'Hors service' }}</p>
        </div>
    </div>
    <a href="{{ route('buses.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
</div>
<style>

.container {
  
    margin: 50px auto;
    background-color: #f7f7f7; /* Soft Gray */
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #666; /* Soft Dark Gray */
    font-family: 'Playfair Display', serif;
    font-size: 36px;
}

.card {
    border: none;
    border-radius: 15px;
    background-color: #fff; /* White */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #c1b5f9; /* Soft Orange */
    color: #fff;
    border-radius: 15px 15px 0 0;
    font-size: 24px;
    padding: 15px;
    font-family: 'Open Sans', sans-serif;
}

.card-body {
    padding: 30px;
}

.card-body p {
    margin-bottom: 15px;
    color: #777; /* Soft Gray */
}

.btn-primary {
    display: block;
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background-color: #c1b5f9; /* Soft Orange */
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: 'Open Sans', sans-serif;
}

.btn-primary:hover {
    background-color: #9389c0; /* Softer Orange */
}

</style>
@endsection