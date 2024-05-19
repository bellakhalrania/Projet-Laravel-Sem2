<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="{{ asset('frontend/css.css') }}">
  <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
   <!----end-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>



    </head>
    <body>
    
<div class="container mt-3">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>#</th>
        <th>numéro cin </th>
        <th>nom </th>
        <th>prenom</th>
        <th>salaire</th>
        <th>adresse</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($chauffeurs as $chauffeur)
      <tr>
        <td>{{$chauffeur->id}}</td>
        <td>{{$chauffeur->ncin}}</td>
        <td>{{$chauffeur->nom}}</td>
        <td>{{$chauffeur->prenom}}</td>
        <td>{{$chauffeur->salaire}}</td>
        <td>{{ substr($chauffeur->adresse,1,40).'...'}}</td>
        <td>
        <a href="{{url('/chauffeurs/'.$chauffeur->id)}}" class="btn btn-primary">show</a>
        <button type="button" class="btn btn-warning">update</button>
        <button type="button" class="btn btn-danger">Delete</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
    </body>
    </html>