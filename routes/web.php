<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/ejemplo', [EjemploController::class, 'index']);
Route::post('/guardar', [EjemploController::class, 'store']);
Route::get('/elimina/{id}',[EjemploController::class, 'elimina']);
Route::get('/edita/{id}',[EjemploController::class, 'muestraDetalle']);
Route::post('/actualiza', [EjemploController::class, 'actualiza']);


Route::get('/', function () {
    return view('welcome');
});
