@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>crear Roles</h2></div>

                <div class="card-body">
              


                    <form action="{{ route('role.store')}}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required Data</h3>

                        <div class="form-group">                            
                            <input type="text" class="form-control" 
                            id="name" 
                            placeholder="Name"
                            name="name"
                            value="{{ old('name')}}"
                            >
                          </div>

                          <hr>

                          <h3>Full Access</h3>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes">
                             <label class="custom-control-label" for="fullaccessyes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no"> 
                            <label class="custom-control-label" for="fullaccessno">No</label>
                          </div>
                            
                        <hr>
                        <h3>Permission List</h3>


                          @foreach($permissions as $permission)

                          
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" 
                            class="custom-control-input" 
                            id="permission_{{$permission->id}}"
                            value="{{$permission->id}}"
                            name="permission[]"

                            
                            >
                            <label class="custom-control-label" 
                                for="permission_{{$permission->id}}">
                                {{ $permission->id }}
                                - 
                                {{ $permission->name }} 
                                <em>( {{ $permission->description }} )</em>
                            
                            </label>
                          </div>


                          @endforeach
                          <hr>
                          <input class="btn btn-primary" type="submit" value="Save">




                    </form>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection