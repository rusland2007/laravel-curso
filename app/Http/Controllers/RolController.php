<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=   Rol::paginate(10);
        return view('rol.index',compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Rol();
            $model->nombre_rol = $request->nombre;
            $model->descripcion_rol = $request->descripcion;
            $model->estado_rol = $request->estado;
            $model->save();
               
        return redirect()->route('roles.index');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = Rol::find($id);
        return view('rol.view')->with('model', $model);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the nerd
        $model = Rol::find($id);
        return view('rol.edit', compact('model')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Rol::findorfail($id);
        $model->nombre_rol = $request->nombre;
        $model->descripcion_rol = $request->descripcion;
        $model->estado_rol = $request->estado;
        $model->save();
        return redirect()->route('roles.index');    
        // back()->with('mensaje', 'Nota actualizada de '.$notaUpdate->nombre);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Rol::find($id);
        $model->delete();
	
        return redirect()->route('roles.index');         
    }
}
