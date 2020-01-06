 
 
 @extends('layouts/app')
 @section('content')
 
 
 <h1>Lista de areas</h1><br>
<!--  mensaje por operaciones -->

@if (Session::has('mensaje'))
<div class="alert alert-warning" role="alert"> {{mensaje}} </div>
@endif


 <a href="{{route('areas.create')}}" class="btn btn-success"> Agregar area </a>
 
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Nro.</th>
            <th>Nombre</th>
            <th>Descripción</th>         
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $fila)
        <tr>
            <td class="v-align-middle"> {{ $loop->iteration }} </td>
            <td class="v-align-middle">{{$fila->nombre_area}}</td>
            <td class="v-align-middle">{{$fila->descripcion_area}}</td>    
            
            <td class="v-align-middle text-center">

                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('areas.show',$fila->id) }}" class="btn btn-info">Ver</a>

                    <a href="{{ route('areas.edit',$fila->id) }}" class="btn btn-primary">Editar</a>
 
                    <form action="{{ route('areas.destroy',$fila->id) }}" method="POST"> 
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>                 
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

   {!! $areas->links() !!}
 
@endsection