<!-- resources/views/buses/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un nouveau Bus</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('buses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="matricule">Matricule</label>
            <input type="text" class="form-control" id="matricule" name="matricule" required>
        </div>
        <div class="form-group">
            <label for="model">Modèle</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>
        <div class="form-group">
            <label for="line">Ligne</label>
            <input type="text" class="form-control" id="line" name="line" required>
        </div>
        <div class="form-group">
            <label for="etat">État</label>
            <select class="form-control" id="etat" name="etat" required>
                <option value="1">En service</option>
                <option value="0">Hors service</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
