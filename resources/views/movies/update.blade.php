@extends('layouts.app')
@section('content')
    <section class="container">
        <div class="row">
            <article class="col-md-10 col-md-offset-1">
                <form action="{{route('movie/update', ['id' => $movie->id])}}" method="post" novalidate>
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" require value="{{$movie->name}}">
                    </div>

                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" name="description" class="form-control" require value="{{$movie->description}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-succes">actualizar</button>
                    </div>
                </form>
            </article>
        </div>
    </section>
@endsection