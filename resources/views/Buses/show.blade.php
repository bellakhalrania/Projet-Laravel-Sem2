<!-- resources/views/buses/show.blade.php -->

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
@endsection
