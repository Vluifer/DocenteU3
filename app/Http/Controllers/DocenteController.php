<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index')->with('docentes',$docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentes =new Docente();

        $docentes->id = $request->get('id');
        $docentes->id_usuario = $request->get('id_usuario');
        $docentes->nombre = $request->get('nombre');
        $docentes->apellido = $request->get('apellido');
        $docentes->block = $request->get('block');
        $docentes->profesional = $request->get('profesional');
        $docentes->escalaron = $request->get('escalaron');
        $docentes->idioma = $request->get('idioma');
        $docentes->anios_experiencia = $request->get('anios_experiencia');
        $docentes->area_trabajo = $request->get('area_trabajo');

        $docentes ->save();
        
        return redirect('docentes');

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
        $docente = Docente::find($id);
        return view('docente.edit')->with('docente',$docente);
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
        $docente = Docente::findOrFail($id);
        $docente->update($request->all());
        return redirect('docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id)->delete();
        return redirect('docentes');
    }
}
