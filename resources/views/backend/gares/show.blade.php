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
                    {{ __('view gare') }}
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                        <tr>
                            <th>nom</th>
                            <td>{{ $gare->nom_gare}}</td>
                        </tr>
                        <tr>
                            <th>lieu</th>
                            <td>{{ $gare->lieu}}</td>
                        </tr>
                        <tr>
                            <th>Addresse/th>
                            <td>{{ $gare->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection