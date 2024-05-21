@extends('backend.app')
@section('content') 
@if (Session::has('success'))
        <div class="alert alert-success" role="alert">
           
          {{Session::get('success')}}
        </div>
    @endif
<h2>chauffeur details</h2>
    <div class="card mb-3">
       

        <div class="card-body">
            </h5>
            <p class="card-text">ncin : {{ $chauffeur->ncin }}</p>
            <p class="card-text">nom: {{ $chauffeur->nom }}</p>
            <p class="card-text">prenom :{{ $chauffeur->prenom }}</p>
            <p class="card-text">salaire :{{ $chauffeur->salaire }}</p>
            <p class="card-text">adresse: {{ $chauffeur->adresse }}</p>
            
        </div>
    </div>
    <a href="{{url('/chauffeurs')}}" class="btn btn-success">liste chauffeurs</a>

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