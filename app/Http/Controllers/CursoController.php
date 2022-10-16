<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = Curso::all();

        return view('cursos.index', compact($curso));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
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
            'nombre'=>'nombre',
            'nivel'=>'nivel',
            'grado'=>'grado',
            'seccion'=>'seccion',
        ]);

        $curso = new Curso();

        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->grado = $request->grado;
        $curso->seccion = $request->seccion;

        $curso->save();

        redirect()->route('cursos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return view('cursos.index', compact($curso));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact($curso));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        $request->validate([
            'nombre'=>'nombre',
            'nivel'=>'nivel',
            'grado'=>'grado',
            'seccion'=>'seccion',
        ]);

        $curso->nombre = $request->nombre;
        $curso->nivel = $request->nivel;
        $curso->grado = $request->grado;
        $curso->seccion = $request->seccion;

        $curso->save();
        
        redirect()->route('cursos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();

        redirect()->route('cursos.index');
    }
}
