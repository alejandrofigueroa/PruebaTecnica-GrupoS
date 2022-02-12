<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\MateriaGradoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [AlumnoController::class, 'alumnosMaterias']);

Route::get('/inicio', [AlumnoController::class, 'alumnosMaterias']);
Route::resource('alumnos', AlumnoController::class);
Route::resource('grados', GradoController::class);
Route::resource('materias', MateriaController::class);
Route::resource('materiaGrados', MateriaGradoController::class);
