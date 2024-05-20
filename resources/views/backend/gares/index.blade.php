@extends('backend.app')
@section('content') 

<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('booking') }}
                </h6>
                <div class="ml-auto">
                  
                    <a href="{{ route('gares.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('ADD Gare') }}</span>
                    </a>
                   
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-booking" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th width="10">

                                </th>
                               
        <th>Nom Gare</th>
        <th>Lieu</th>
        <th>Adresse</th>
        <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($gares as $gare)
                            <tr>
                              <td></td>
                              <td>{{ $gare->nom_gare}}</td>
                              <td>{{ $gare->lieu }}</td>
                              <td>{{ $gare->address }}</td>
                              <td>
                                
                                <a href="{{Route('gares.show',$gare->id)}}" class="btn btn-info">Show</a>
                                <a href="{{ Route('gares.edit', $gare->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('gares.destroy', $gare->id) }}"  onsubmit="return confirm('Delete Gare ?')" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center">{{ __('Data Empty') }}</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->

</div>
@endsection

