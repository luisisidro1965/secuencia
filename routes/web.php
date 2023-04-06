<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\LugarController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\EstrategiasController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\ImpresionController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubirarchivoController;
use App\Http\Controllers\ParalelogramoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\HomeController;

use App\Models\Asignatura;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    //Agrega variable de session almacenada en framework/sessions
    //session(['prueba' => 'awi40']);  
    //dd(session('prueba'));
    return view('welcome');
})->middleware('auth.basic');

Route::get('usuariosok', function () {
    $response = Http::get('https://http.cat/100.jpg');
    //return $response->body(
    //return $response->successful();
    //return $response->json();
    $lista = $response->json();
    //return $lista;
    return view('apis.usuarios', ['lista' => $lista]);
});

Route::view('/asistente', 'asistente.index');
Route::view('/tutorado', 'tutorado.index');
Route::view('/tutor', 'tutor.index');
Route::view('/portada', 'portada');
Route::view('login3', 'login');
Route::view('mapas', 'mapas.carmen');
Route::view('perros', 'apiperros');
Route::view('pit', 'evalua.pit');
Route::view('/para', 'coordi.ejercicio.paralelogramo');
Route::view('correo', 'emails.envia');

Auth::routes();

//Route::get('email/verify', [Auth\VerificationController::class, 'show'])->name('verification.notice');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('getLugar', [LugarController::class, 'getLugar']);

Route::resource('lugar', LugarController::class);

Route::resource('familias', FamiliaController::class);

Route::post('multipledestroy', [AreaController::class . 'multipledestroy']);
Route::resource('areas', AreaController::class);

Route::resource('asignatura', AsignaturaController::class);

Route::get('asignatura/unidad/{id}', [AsignaturaController::class, 'unidades']);

Route::get('/mate', function () {
    return Asignatura::where('cuatrimestre', '=', '4')->get();
});

Route::get('importar', [RegisterController::class, 'import']);

Route::get('send-mail', [MailController::class, 'index'])->name(('contact'));

Route::resource('/coordinador', QuestionController::class);

Route::get('areacir', [SubirarchivoController::class, 'areacir']);

Route::get('mensaje', [SubirarchivoController::class, 'mensaje'])->middleware('auth');

Route::get('/imprimir/{a}', ImpresionController::class);

Route::resource('estrategia', EstrategiasController::class);

Route::post('/lado', [ParalelogramoController::class, 'lado']);

Route::resource('producto', ProductoController::class);

Route::resource('manuales', ManualController::class);

Route::get('/consul', function () {

    $users = DB::table('asignaturas')
    ->groupBy('progedu_id')
    ->get();

    return $users;
});
