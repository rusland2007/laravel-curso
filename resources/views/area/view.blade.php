@extends('layouts/app')
@section('content')

<h3>Datos del area</h3>

<a href="{{ route('areas.index') }}" class="btn btn-primary">Listado areas</a>
<br>
        
    <div class="row">    
        <div class="col-sm-5">
            <label for="correo">Nombre del area: </label>
        </div>
        <div class="col-sm-7">
            {{$model->nombre_area}}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="correo">Descripcion del area: </label>
        </div>
        <div class="col-sm-7">
            
                {{$model->descripcion_area}}
            
        </div>        
    </div>

    
@endsection

