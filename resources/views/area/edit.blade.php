@extends('layouts/app')
@section('content')

<h3>Actualizar datos del area</h3>

<form action="{{ route('areas.update',$model->id) }}" method="POST">
    @csrf
    @method('PUT')  

    <div class="row">    
        <div class="col-sm-5">
            <label for="correo">Nombre del area: </label>
        </div>
        <div class="col-sm-7">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre del area" value="{{$model->nombre_area}}">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="correo">Descripcion del area: </label>
        </div>
        <div class="col-sm-7">
            <textarea name="descripcion" id="descripcion" rows="2" cols="30" placeholder="Area descripcion">
                {{$model->descripcion_area}}
            </textarea>
        </div>        
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('areas.index') }}" class="btn btn-primary">Listado areas</a>
     
</form>

@endsection

