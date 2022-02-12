<?php

namespace App\Http\Controllers;

use App\Models\MateriaGrado;
use App\Models\Materia;
use App\Models\Grado;
//use Illuminate\Http\Request;
use App\Http\Requests\MateriaGradoRequest;

class MateriaGradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiasGrados = MateriaGrado::join('grados','grados.id','=','materias_grados.grado_id')
                                    ->join('materias','materias.id','=','materias_grados.materia_id')
                                    ->select('materias_grados.id as id','grados.nombre as grado','materias.nombre as materia')
                                    ->get();

        return view('materiaGrado.index', compact('materiasGrados'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = Materia::pluck('nombre','id');
        $grados = Grado::pluck('nombre','id');
        $materiaGrado = new MateriaGrado();

        return view('materiaGrado.create', compact('materiaGrado','grados','materias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MateriaGradoRequest $request)
    {
        $materiaGrado = MateriaGrado::create($request->validated());

        return redirect()->route('materiaGrados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MateriaGrado  $materia_Grado
     * @return \Illuminate\Http\Response
     */
    public function show(MateriaGrado $materiaGrado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MateriaGrado  $materia_Grado
     * @return \Illuminate\Http\Response
     */
    public function edit(MateriaGrado $materiaGrado)
    {
        return view('materiaGrado.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MateriaGrado  $materia_Grado
     * @return \Illuminate\Http\Response
     */
    public function update(MateriaGradoRequest $request, MateriaGrado $materiaGrado)
    {
        $materiaGrado->update($request->validated());


        return redirect()->route('materiaGrados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaGrado  $materia_Grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaGrado $materiaGrado)
    {
        $materiaGrado->delete();

        return redirect()->route('materiaGrados.index');
    }
}
