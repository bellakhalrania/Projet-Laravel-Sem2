<form action="{{route('chauffeurs.store')}}" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <!-- Number input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="ncin" class="form-control" value="{{old('ncin')}}"/>
    <label class="form-label" for="form6Example6">numéro cin :</label>
  </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="nom" class="form-control" value="{{old('nom')}}" />
        <label class="form-label"  for="form6Example1">nom :</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" name="prenom" class="form-control" value="{{old('prenom')}}"/>
        <label class="form-label" for="form6Example2">prenom :</label>
      </div>
    </div>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" name="salaire" class="form-control" step="any" value="{{old('salaire')}}"/>
    <label class="form-label" for="form6Example6">salaire :</label>
  </div>
  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" name="adresse" class="form-control" value="{{old('adresse')}}"/>
    <label class="form-label" for="form6Example3">adresse :</label>
  </div>

  

  

  

  



  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Ajouter chauffeur</button>
</form>