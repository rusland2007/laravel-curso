<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombre_alumno =  $request->nombre;
        $alumno->apellido_mat_alumno =  $request->apepat;
        $alumno->apellido_pat_alumno =  $request->apemat;
        $alumno->fecha_nac_alumno =  $request->fechanac;
        $alumno->documento_identidad_alumno =  $request->docidentidad;
        $alumno->direccion_alumno =  $request->docidentidad;
        $alumno->numero_referencia_alumno =  12312;
        $alumno->nivel_estudios_alumno =  $request->docidentidad;
        $alumno->informacion_adicional =  $request->docidentidad;
        $alumno->numero_telefonico_alumno =  12312;
        $alumno->correo_alumno =  $request->docidentidad;
        $alumno->estado_alumno =  1;
        


        $alumno->save();



        return $alumno;
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
