@extends('backend.app')
@section('content') 
    
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
           
          {{Session::get('success')}}
        </div>
    @endif
    <a href="{{url('/chauffeurs/create')}}" class="btn btn-primary">ajouter chauffeur</a>
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
        <a href="{{route('chauffeurs.show',$chauffeur->id)}}" class="btn btn-success">show</a>
        <a href="{{route('chauffeurs.edit',$chauffeur->id)}}" class="btn btn-warning">update</a>
        <form action="{{route('chauffeurs.destroy',$chauffeur->id)}}" method="post">
        @csrf <!-- Ensure CSRF protection -->
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@push('style-alt')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
@endpush

@push('script-alt')
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $('.datetimepicker').datetimepicker({
            format: 'YYYY-MM-DD HH:mm',
            locale: 'en',
            sideBySide: true,
            icons: {
            up: 'fas fa-chevron-up',
            down: 'fas fa-chevron-down',
            previous: 'fas fa-chevron-left',
            next: 'fas fa-chevron-right'
            },
            stepping: 10
        });
    </script>
@endpush