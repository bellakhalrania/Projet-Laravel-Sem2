<form action="{{ route('chauffeurs.store') }}" method="post">
  @csrf <!-- Ensure CSRF protection -->
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <!-- CIN Number input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="number" name="ncin" id="ncin" class="form-control @error('ncin') is-invalid @enderror"  value="{{ old('ncin') }}" />
        <label class="form-label" for="ncin">Numéro CIN :</label>
        @error('ncin')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
    <!-- Last Name input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" />
        <label class="form-label" for="nom">Nom :</label>
        @error('nom')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
    <!-- First Name input -->
    <div class="col-md-6">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" />
        <label class="form-label" for="prenom">Prénom :</label>
        @error('prenom')
            <small class="text-danger" >{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>
  
  <!-- Salary input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="salaire" id="salaire" class="form-control @error('salaire') is-invalid @enderror" step="any" value="{{ old('salaire') }}" />
    <label class="form-label" for="salaire">Salaire :</label>
    @error('salaire')
            <small class="text-danger" >{{$message}}</small>
        @enderror
  </div>
  
  <!-- Address input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="adresse" id="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') }}" />
    <label class="form-label" for="adresse">Adresse :</label>
    @error('adresse')
            <small class="text-danger" >{{$message}}</small>
        @enderror
  </div>

  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Ajouter chauffeur</button>
</form>
