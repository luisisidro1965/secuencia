<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\LugarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portada', function () {
    return view('portada');
});

Route::resource('asignaturas', AsignaturaController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('getLugar', [App\Http\Controllers\LugarController::class, 'getLugar']);
Route::resource('lugar', LugarController::class);

Route::view('login3', 'login');

Route::resource('areas', AreaController::class);

Route::view('mapas', 'mapas.carmen');
Route::view('ren', 'ren');

Route::view('bucles', 'bucles');

Route::view('perros', 'apiperros');

Route::get('usuarios', function () {
    $response = Http::get('https://http.cat/100.jpg');
    //return $response->body();
    //return $response->successful();
    return $response->json();
    $lista = $response->json();
    return $lista;
    return view('apis.usuarios', ['lista' => $lista]);
});

Route::resource('asignatura', AsignaturaController::class);
