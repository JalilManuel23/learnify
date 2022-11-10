<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\VideoController;
use App\Models\Calificacion_curso;
use App\Models\Curso;
use App\Models\User;
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

Route::post('/iniciar_sesion', [App\Http\Controllers\UserController::class, 'iniciar_sesion']);
Route::resource('users', UserController::class);

Route::get('/estudiante/perfil/{id}', [App\Http\Controllers\UserController::class, 'traer_perfil_estudiante']);

Route::get('/estudiantes/buscar_perfil/{id}', [App\Http\Controllers\EstudianteController::class, 'buscar_perfil']);
Route::resource('estudiantes', EstudianteController::class);

Route::get('/instructor/perfil/{id}', [App\Http\Controllers\UserController::class, 'traer_perfil_instructor']);
Route::resource('instructores', InstructorController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('preguntas', PreguntaController::class);

Route::resource('examenes', ExamenController::class);

Route::resource('calificaciones', Calificacion_curso::class);

Route::get('/cursos/por_instructor/{id}', [App\Http\Controllers\CursoController::class, 'traer_cursos_por_instructor']);
Route::get('/cursos/por_categoria/{categoria}', [App\Http\Controllers\CursoController::class, 'traer_cursos_por_categoria']);
Route::resource('curso', CursoController::class);

Route::post('/registrar', [UserController::class, 'createUser']);
Route::post('/login', [UserController::class, 'loginUser']);

Route::group(['middleware' => ["auth:sanctum"]], function() {
    Route::get('usuario', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);

    Route::get('videos', [VideoController::class, 'index']);
});