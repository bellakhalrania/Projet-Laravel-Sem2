
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
            <h1 class="h3 mb-0 text-gray-800">{{ __('update Gare') }}</h1>
                <div class="ml-auto">
                    <a  class="btn btn-primary" href="{{ route('gares.index') }}">
                        <span class="text">{{ __('Go Back') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('gares.update', $gare->id) }}" method="POST" >
                    @csrf
                     @method('PUT')
                    <div class="form-group">
                        <label for="customer">{{ __('nom_gare') }}</label>


                    <input type="text" class="form-control @error('nom_gare') is-invalid @enderror"
                        value="{{ old('nom_gare') ?? $gare->nom_gare }}" name="nom_gare" id="nom_gare" placeholder="Enter gare name">
                    @error('nom_gare')
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('lieu') }}</label>


                    <input type="text" class="form-control @error('lieu') is-invalid @enderror"
                        value="{{ old('lieu') ?? $gare->lieu }}" name="lieu" id="lieu" placeholder="Enter un lieu">
                    @error('lieu')
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for="customer">{{ __('address') }}</label>


                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                        value="{{ old('address') ?? $gare->address }}" name="address" id="address" placeholder="Enter une addresse">
                    @error('address')
                    @enderror
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