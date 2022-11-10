<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return response()->json($cursos);
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
        $curso = Curso::create($request->post());
        return response()->json([
            'curso' => $curso
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        return response()->json($curso);
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
    public function update(Request $request, Curso $curso)
    {
        $curso->fill($request->post())->save();
        return response()->json([
            'curso' => $curso
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
    }

    public function traer_cursos_por_instructor($id_instructor)
    {
        $cursos = DB::table('cursos')->where('instructor', $id_instructor)->get();

        return response()->json([
            'cursos' => $cursos
        ]);
    }

    public function traer_cursos_por_categoria($categoria)
    {
        $cursos = DB::table('cursos')->where('categoria', $categoria)->get();

        $cursos_devolver = array();

        foreach($cursos as $curso) 
        {
            $instructor = DB::table('users')->where('id', $curso->instructor)->get();
            $curso->instructor = $instructor;

            $cursos_devolver[] = $curso;
        }

        return response()->json([
            'cursos' => $cursos_devolver
        ]);
    }
}
