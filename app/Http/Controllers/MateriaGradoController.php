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
        return view('materiaGrado.index');
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
    public function store(MateriaGradoRequest $request)
    {
        $materiaGrado = MateriaGrado::create($request->validated());

        return response()->json($materiaGrado);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaGrado  $materia_Grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaGrado $materiaGrado)
    {
        //
    }
}
