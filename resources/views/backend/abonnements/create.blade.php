
@extends('backend.app')
@section('content') 
<div class="container-fluid">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header py-3 d-flex">
            <h1 class="h3 mb-0 text-gray-800">{{ __('create Abonnement') }}</h1>
                <div class="ml-auto">
                    <a  class="btn btn-primary" href="{{ route('Abonnements.index') }}">
                        <span class="text">{{ __('Go Back') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('Abonnements.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                        <label for="image">photo :</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div> 
                    <div class="form-group">
                        <label for="customer">{{ __('nom') }}</label>
                        <input type="text" class="form-control " id="nom" name="nom"  /> 
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('prenom') }}</label>
                        <input type="text" class="form-control " id="prenom" name="prenom"  /> 
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('email') }}</label>
                        <input type="text" class="form-control " id="phone" name="email"  /> 
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('phone') }}</label>
                        <input type="text" class="form-control " id="phone" name="phone"  /> 
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('lieu') }}</label>
                        <input type="text" class="form-control " id="lieu" name="lieu"  /> 
                    </div>
                    <div class="form-group">
                        <label for="room">{{ __('trajet') }}</label>
                        <select class="form-control" name="trajet_id" id="trajet_id">
                            @foreach($trajets as $id => $trajet)
                                <option {{ $trajet->id == $id ? 'selected' : null }} value="{{ $id }}">{{ $trajet->departure}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >{{ __('gare de depart') }}</label>
                        <select class="form-control" name="garedepart_id" id="garedepart_id">
                            @foreach($gares as $id => $gare)
                                <option {{ $gare->id == $id ? 'selected' : null }} value="{{ $id }}">{{ $gare->nom_Gare}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >{{ __('gare darrivée')  }}</label>
                        <select class="form-control" name="garearrive_id" id="garearrive_id">
                            @foreach($gares as $id => $gare)
                                <option {{ $gare->id == $id ? 'selected' : null }} value="{{ $id }}">{{ $gare->nom_Gare}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="status">{{ __('Status') }}</label>
                        <select class="form-control" name="status" id="status">
                                <option value="0">Created</option>
                                <option value="1">Completed</option>
                                <option value="2">Concelled</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

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