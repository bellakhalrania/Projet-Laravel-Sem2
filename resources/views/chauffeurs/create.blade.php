@extends('backend.app')
@section('content') 
    
<form action="{{ route('chauffeurs.store') }}" method="post">
  @csrf <!-- Ensure CSRF protection -->
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <!-- CIN Number input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="ncin">Numéro CIN :</label>

        <input type="number" name="ncin" id="ncin" class="form-control @error('ncin') is-invalid @enderror"  value="{{ old('ncin') }}" />
        @error('ncin')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
    <!-- Last Name input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline">
      <label class="form-label" for="nom">Nom :</label>

        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" />
        @error('nom')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
    <!-- First Name input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline">
      <label class="form-label" for="prenom">Prénom :</label>

        <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" />
        @error('prenom')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>
  
  <!-- Salary input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="salaire">Salaire :</label>

    <input type="number" name="salaire" id="salaire" class="form-control @error('salaire') is-invalid @enderror" step="any" value="{{ old('salaire') }}" />
    @error('salaire')
            <small class="text-danger" >{{$message}}</small>
        @enderror
  </div>
  
  <!-- Address input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="adresse">Adresse :</label>

    <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" />
    @error('adresse')
            <small class="text-danger" >{{$message}}</small>
        @enderror
  </div>

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Ajouter chauffeur</button>
</form>

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