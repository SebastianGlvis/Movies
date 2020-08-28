@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>lista de Roles</h2></div>

                <div class="card-body">

                <a href="{{route('role.create')}}" 
                      class="btn btn-primary float-right"
                      >Create
                    </a>
                    <br><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">full-access</th>
                            <th scope="col">status</th>
                            <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @foreach ($roles as $role)
                            
                                <th scope="row">{{ $role->id}}</th>
                                <td>{{ $role->name}}</td>
                                <td>{{ $role['full-access']}}</td>  
                                <td>{{ $role->status_id}}</td> 
                                <td><a class="btn btn-info" href="{{ route('role.show',$role->id)}}">Show</a> </td>  
                                <td><a class="btn btn-success" href="{{ route('role.edit',$role->id)}}">Edit</a></td>  

                                 
                                </tr>                           
                            @endforeach
                            
                        </tbody>
                        </table>

                        {{ $roles->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection