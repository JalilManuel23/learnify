<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
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
        $user = User::create($request->post());
        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
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
    public function update(Request $request, User $user)
    {
        $user->fill($request->post())->save();
        return response()->json([
            'user' => $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }

    public function traer_perfil_estudiante($id)
    {
        $datos = Estudiante::find($id)->usuario;
        return response()->json([
            'datos' => $datos
        ]);
    }

    public function traer_perfil_instructor($id)
    {
        $instructor = Instructor::find($id);

        $usuario = $instructor->usuario;
        $calificacion = $instructor->calificacion;
        $especialidad = $instructor->especialidad;

        return response()->json([
            'usuario' => $usuario,
            'calificacion' => $calificacion,
            'especialidad' =>$especialidad,
        ]);
    }

    public function iniciar_sesion(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')
                ->where('email', $email)
                ->where('password', $password)
                ->get();

        $respuesta = (count($user) > 0) ? $user : 'Datos incorrectos';

        return response()->json($respuesta);      
    }
}
