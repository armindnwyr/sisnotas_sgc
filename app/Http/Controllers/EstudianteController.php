<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante = Estudiante::all();
        return view('estudiantes.index', compact($estudiante));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dni'=>'required',
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'required',
            'genero'=>'required',
            'fecha'=>'required',
            'correo'=>'required',
            'celular'=>'required',
        ]);

        $estudiante = new Estudiante();

        $estudiante->dni = $request->dni;
        $estudiante->nombre = $request->nombre;
        $estudiante->paterno = $request->paterno;
        $estudiante->materno = $request->materno;
        $estudiante->genero = $request->genero;
        $estudiante->fecha = $request->fecha;
        $estudiante->correo = $request->correo;
        $estudiante->celular = $request->celular;

        $estudiante->save();

        return redirect()->route('estudiantes.index');      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.index', compact($estudiante));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'dni'=>'required',
            'nombre'=>'required',
            'paterno'=>'required',
            'materno'=>'required',
            'genero'=>'required',
            'fecha'=>'required',
            'correo'=>'required',
            'celular'=>'required',
        ]);

        $estudiante->dni = $request->dni;
        $estudiante->nombre = $request->nombre;
        $estudiante->paterno = $request->paterno;
        $estudiante->materno = $request->materno;
        $estudiante->genero = $request->genero;
        $estudiante->fecha = $request->fecha;
        $estudiante->correo = $request->correo;
        $estudiante->celular = $request->celular;

        $estudiante->save();

        return redirect()->route('estudiantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiantes.index');
    }
}
