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
<style>

.container {

    margin: 0 auto;
    padding: 30px;
    border-radius: 10px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 32px;
    font-weight: bold;
    color: #444;
    text-align: center;
    margin-bottom: 40px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}



.form-control:focus {
    outline: none;
    box-shadow: 0 0 2px 1px #4CAF50;
}

select.form-control {
  
    background-repeat: no-repeat;
    background-position: right 10px center;
    padding-right: 30px;
}

button.btn-primary {
    display: block;
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    background-color: #c1b5f9;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    border: none;
    cursor: pointer;
}

button.btn-primary:hover {
    background-color: #9389c0;
}
</style>

@endsection
