<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Grado;
use App\Models\MateriaGrado;
use Illuminate\Http\Request;
use App\Http\Requests\AlumnoRequest;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();

        return view('alumno.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        $grados = Grado::pluck('nombre','id');

        return view('alumno.create', compact('alumno','grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoRequest $request)
    {
        $alumno = Alumno::create($request->validated());

        return redirect()->route('alumnos.index')->with('success','El alumno fue creado correctamente'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        $grados = Grado::pluck('nombre','id');
        return view('alumno.edit', compact('alumno','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, Alumno $alumno)
    {
        $alumno->update($request->validated());

        return redirect()->route('alumnos.index')->with('success','El alumno fue actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success','El alumno correctamente eliminado');
    }

    public function alumnosMaterias(){

        $gradoAlumnos = Alumno::join('grados','grados.id','=','alumnos.grado_id')
                        ->select('alumnos.id as id', 'alumnos.nombre as alumno', 'grados.id as grado_id', 'grados.nombre as grado')
                        ->get();

        $gradoMaterias = MateriaGrado::join('grados','grados.id','=','materias_grados.grado_id')
                                    ->join('materias','materias.id','=','materias_grados.materia_id')
                                    ->select('materias_grados.grado_id as grado_id', 'materias.nombre as materia')
                                    ->get();

        return view('inicio', compact('gradoAlumnos', 'gradoMaterias'));
    }
}
