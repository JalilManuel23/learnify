<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\VideoController;
use App\Models\Calificacion_curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', UserController::class);

Route::get('/estudiante/perfil/{id}', [App\Http\Controllers\UserController::class, 'traer_perfil_estudiante']);
Route::resource('estudiantes', EstudianteController::class);

Route::get('/instructor/perfil/{id}', [App\Http\Controllers\UserController::class, 'traer_perfil_instructor']);
Route::resource('instructores', InstructorController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('videos', VideoController::class);

Route::resource('preguntas', PreguntaController::class);

Route::resource('examenes', ExamenController::class);

Route::resource('calificaciones', Calificacion_curso::class);