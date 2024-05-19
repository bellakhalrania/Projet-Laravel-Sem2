@extends('backend.app')
@section('content') 
<div class="container-fluid">

    <!-- Page Heading -->
    @if (Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success') }}
      </div>
   @endif

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('view abonnement') }}
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <tr>
                            <th>photo</th>
                            <td><img src="{{ asset('storage/'.$abonnement->image) }}" class="card-img-top" alt="{{ $abonnement->title }}"></td>
                        </tr>
                        <tr>
                            <th>nom</th>
                            <td>{{ $abonnement->nom }}</td>
                        </tr>
                        <tr>
                            <th>prenom</th>
                            <td>{{ $abonnement->prenom }}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{ $abonnement->email }}</td>
                        </tr>
                        <tr>
                            <th>phone</th>
                            <td>{{ $abonnement->phone }}</td>
                        </tr>
                        <tr>
                            <th>lieu</th>
                            <td>{{ $abonnement->lieu}}</td>
                        </tr>
                        <tr>
                            <th>trajet</th>
                            <td>{{ $abonnement->trajet->id }}</td>
                        </tr>
                        <tr>
                            <th>gare de départ</th>
                            <td>{{ $abonnement->gare1->nom_Gare }}</td>
                        </tr>
                        <tr>
                            <th>gare d'arrivé</th>
                            <td>{{ $abonnement->gare2->nom_Gare }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection