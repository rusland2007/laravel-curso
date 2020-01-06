<?php

namespace App\Http\Controllers;


use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas=   Area::paginate(10);
        return view('area.index',compact('areas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Area();
            $model->nombre_area = $request->nombre;
            $model->descripcion_area = $request->descripcion;
            $model->save();
               
        return redirect()->route('areas.index');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $area = Area::find($id);
        return view('area.view')->with('model', $area);
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
        $model = Area::find($id);
        return view('area.edit', compact('model')); 
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
        $model = Area::findorfail($id);
        $model->nombre_area = $request->nombre;
        $model->descripcion_area = $request->descripcion;
        $model->save();
        return redirect()->route('areas.index');    
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
        $model = Area::find($id);
        $model->delete();
	
        return redirect()->route('areas.index');         
    }
}
