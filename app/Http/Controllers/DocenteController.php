<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Auth\Events\Validated;
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
        $docente = Docente::all();
        return view('doncente.index', compact($docente));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
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
            'especialidad'=>'required',
            'nivel'=>'required',
        ]);

        $docente = new Docente();

        $docente->dni = $request->dni;
        $docente->nombre = $request->nombre;
        $docente->paterno = $request->paterno;
        $docente->materno = $request->materno;
        $docente->genero = $request->genero;
        $docente->fecha = $request->fecha;
        $docente->correo = $request->correo;
        $docente->celular = $request->celular;
        $docente->especialidad = $request->especialidad;
        $docente->nivel = $request->nivel;

        $docente->save();
        
        return redirect()->route('docente.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        return view('docentes.index', compact($docente));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(Docente $docente)
    {
        return view('docentes.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
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
            'especialidad'=>'required',
            'nivel'=>'required',
        ]);

        $docente->dni = $request->dni;
        $docente->nombre = $request->nombre;
        $docente->paterno = $request->paterno;
        $docente->materno = $request->materno;
        $docente->genero = $request->genero;
        $docente->fecha = $request->fecha;
        $docente->correo = $request->correo;
        $docente->celular = $request->celular;
        $docente->especialidad = $request->especialidad;
        $docente->nivel = $request->nivel;

        $docente->save();
        return redirect()->route('docente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();

        return redirect()->route('docente.index');
    }
}
