@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-12">
                <form action="{{route('movie/show')}}" method="post" novalidate class="form-inline">
                @csrf
                
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" name="name">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Buscar</button>
                        <a href="{{route('movie.index')}}" class="btn btn-primary">Todo</a>
                        <a href="{{route('movie.create')}}" class="btn btn-primary">Crear</a>
                    </div>
                </form>
            </article>

            <article class="col-md-12">
                <table class="table table-condensed table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td>{{$movie->name}}</td> 
                            <td>{{$movie->description}}</td>
                            <td>
                             
                            <form action="{{ route('movie.destroy',$movie->id) }}" method="POST">
   
                                   
                                    <a class="btn btn-primary" href="{{ route('movie.edit',$movie->id) }}">Editar</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                
                            
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            </article>                      
        </div>
    </section>
@endsection        