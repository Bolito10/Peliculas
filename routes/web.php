<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PelisController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//ruta buena para movil
Route::get('api', [HomeController::class, 'indexapi']);

Route::get('peliculas', [PelisController::class, 'index'])->name('peliculas.index');

Route::get('peliculas/create', [PelisController::class, 'create'])->name('peliculas.create');

Route::post('peliculas', [PelisController::class, 'store'])->name('peliculas.store');

//Route::get('peliculas/{peliculas}', [PelisController::class, 'show'])->name('peliculas.show');
 








/*Route::get('cursos/{curso}/{categoria?}', function($curso, $categoria = null){
    if($categoria){
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenido al curso: $curso"; 
    }
});*/

