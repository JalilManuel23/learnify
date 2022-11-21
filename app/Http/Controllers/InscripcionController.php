<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Curso;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Inscripcion = Inscripcion::all();
        return response()->json($Inscripcion);
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
        $inscripcion = Inscripcion::create($request->post());
        return response()->json([
            'inscripcion' => $inscripcion
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        return response()->json($inscripcion);
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
    public function set_avance(Request $request, $id)
    {
        $inscripcion = Inscripcion::where('id', $id)->first();
        $inscripcion->avance = $request->avance;
        $inscripcion->save();

        return response()->json([
            'inscripcion' => $inscripcion
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
    }

    public function comprobar_inscripcion(Request $request)
    {
        $estudiante = $request->estudiante;
        $curso = $request->curso;

        $inscripcion = Inscripcion::where('estudiante', $estudiante)->where('curso', $curso)->first();

        return response()->json([
            'inscripcion' => $inscripcion
        ]);
    }

    public function traer_cursos_estudiante(Request $request)
    {
        $estudiante = $request->estudiante;

        $inscripciones = Inscripcion::where('estudiante', $estudiante)->get();

        $inscripciones_completas = array();

        foreach($inscripciones as $inscripcion)
        {
            $curso = Inscripcion::find($inscripcion->id)->curso_datos;
            
            $nueva_inscripcion = $inscripcion;
            $nueva_inscripcion->info_curso = $curso;

            $inscripciones_completas[] = $nueva_inscripcion;
        }

        return response()->json([
            'inscripciones' => $inscripciones
        ]);
    }
}
