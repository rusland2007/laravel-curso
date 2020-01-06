@extends('layouts/app')
@section('content')

<h3>Datos del rol</h3>

<a href="{{ route('roles.index') }}" class="btn btn-primary">Listado roles</a>
<br>
        
    <div class="row">    
        <div class="col-sm-5">
            <label for="correo">Nombre del rol: </label>
        </div>
        <div class="col-sm-7">
            {{$model->nombre_rol}}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="descripcion">Descripcion del rol: </label>
        </div>
        <div class="col-sm-7">            
                {{$model->descripcion_rol}}            
        </div>        
    </div>


    <div class="row">
        <div class="col-sm-5">
            <label for="estado">Estado del rol: </label>
        </div>
        <div class="col-sm-7">            
            {{ ($model->estado_rol == 0) ? 'Desactivado' : 'Activo' }}             
        </div>        
    </div>

    
@endsection

