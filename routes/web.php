<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/',HomeController::class)->name('home');

Route::resource('cursos',CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

/*
Route::controller(CursoController::class)->group(function(){

    
    Route::get('cursos', 'index')->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');
    Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');
    Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
    Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

    Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');


});
*/
/*
Route::get('cursos/{curso}/{categoria?}', function($curso,$categoria=null){
    return("Hola curso: $curso, $categoria");

    if($categoria){
        return("mensaje1 $curso,$categoria");
    }else{
        return("mensaje1 $curso");
    }
});
*/