<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\ItemController;
use \App\Models\User;

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

Route::get('/test',function(){
//Obtener Datos
//     $user=User::find(1);
//     $user=User::select("*")->where('id',1)->get();
    
//     $users=User::all();
//     $users=User::select('name','lastname','email')->get();
//     foreach($users as $user){
//         echo $user->name.", ".$user->lastname.", ".$user->email.'<br>';
//     }

//     dd($users);
//Modificar Datos
//     $user=User::find(1);

//     $user->name="Mario";
//     $user->save();

//     User::where('id',1)->update([
//         "lastname"=>"apellido",
//     ]);

//Eliminar
//     $user=User::find(11);
//     $user->delete();

//Crear/Insertar
//     User::create([
//         "name"=>"Mario nuevo",
//         "lastname"=>"Mario apellido",
//         "email"=>"mario@mario.es",
//         "password"=>\Illuminate\Support\Facades\Hash::make("123456")
//     ]);
//     $user = new User();
//     $user->name = "nuevo user";
//     $user->lastname = "nuevo user lastname";
//     $user->email = "nuevo@user.es";
//     $user->password = \Illuminate\Support\Facades\Hash::make("123456");
//     $user->save();
});


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
