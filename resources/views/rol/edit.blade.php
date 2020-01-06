@extends('layouts/app')
@section('content')

<h3>Actualizar datos del rol</h3>

<form action="{{ route('roles.update',$model->id) }}" method="POST">
    @csrf
    @method('PUT')  

    <div class="row">    
        <div class="col-sm-5">
            <label for="nombre">Nombre del rol: </label>
        </div>
        <div class="col-sm-7">
            <input type="text" name="nombre" id="nombre"  value="{{$model->nombre_rol}}">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="descripcion">Descripcion del rol: </label>
        </div>
        <div class="col-sm-7">
            <textarea name="descripcion" id="descripcion" rows="2" cols="30" >
                {{$model->descripcion_rol}}
            </textarea>
        </div>        
    </div>
   
    <div class="row">
        <div class="col-sm-5">
            <label for="estado">Estado rol: </label>
        </div>
        <div class="col-sm-7">
            <select name="estado"  id="estado">
                <option value="0" {{ ($model->estado_rol == 0) ? 'selected' : '' }}>Desactivo</option>
                <option value="1" {{ ($model->estado_rol == 1) ? 'selected' : '' }}>Activo</option>                
               </select>
        
        </div>        
    </div>

    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('roles.index') }}" class="btn btn-primary">Listado roles</a>
     
</form>

@endsection

