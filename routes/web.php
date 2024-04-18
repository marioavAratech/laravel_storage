<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\ItemController;

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

Route::get('/',[MainController::class,"index"] );

Route::get('/listar',[ItemController::class,"index"] )->name("listar.items");
Route::get('/crear',[ItemController::class,"showFormCreate"] )->name("mostrar.crear");
Route::get('/editar/{id}',[ItemController::class,"showFormEdit"] )->name("mostrar.editar");
Route::get('/eliminar/{id}',[ItemController::class,"destroy"] )->name("eliminar.item");
Route::POST('/actualizar',[ItemController::class,"update"] )->name("actualizar.item");
Route::get('/mostrar/{id}',[ItemController::class,"show"] )->name("mostrar.item");
Route::POST('/store',[ItemController::class,"store"] )->name("crear.item");

// Route::get('/ruta1/{nombre}/{edad}', function ($nombre,$edad) {
//     echo "Ruta 1: Hola, ".$nombre-", tu edad es: ".$edad." años.";
// });
// Route::get('/ruta1/{nombre}/{edad}', [\App\Http\Controllers\TestController::class,'index']);

// Route::get('/ruta2/nombre', function () {
//     echo "Ruta 2";
// });
