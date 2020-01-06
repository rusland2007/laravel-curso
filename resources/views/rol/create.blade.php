@extends('layouts/app')
@section('content')

<h3>Crear area</h3>

    @if(count($errors) > 0)
		<div class="errors text-danger">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif


<form action="{{ route('roles.store') }}" method="POST">
    @csrf

    <div class="row">    
        <div class="col-sm-5">
            <label for="corrnombreeo">Nombre del rol: </label>
        </div>
        <div class="col-sm-7">
            <input type="text" name="nombre" id="nombre" placeholder="Nombre del area">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="descripcion">Descripcion del rol: </label>
        </div>
        <div class="col-sm-7">
            <textarea name="descripcion" id="descripcion" rows="2" cols="30" placeholder="Area descripcion"></textarea>
        </div>        
    </div>

    <div class="row">
        <div class="col-sm-5">
            <label for="estado">Estado rol: </label>
        </div>
        <div class="col-sm-7">
            <select name="estado"  id="estado">
                <option value="0">Desactivo</option>
                <option value="1">Activo</option>                
               </select>
        
        </div>        
    </div>

    <button type="submit" class="btn btn-success">Enviar</button>

    <a href="{{ route('roles.index') }}" class="btn btn-primary">Listado roles</a>
     
</form>

@endsection

