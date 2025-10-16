<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Http\Controllers\GestorController;
use App\Http\Controllers\NotaController;

use App\Http\Controllers\Estudiantes\EstudiantesController;

Route::get('/', function () {
    
    /*$estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;*/
    
    return view('welcome');
});

Route::get('/saludos', function() {
    return 'Hola amiguitos!';
})->name('saluditos');

Route::get('/bienvenidos', function() {
    return view('bienvenidos');
})->name('bienvenidos');

/*Route::get('/estudiantes', function() {
    return View::make('estudiantes');
})->name('estudiantes');*/


Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::post('/estudiantes', [EstudiantesController::class, 'store'])->name('estudiantes.store');




Route::resource('gestors', GestorController::class);
Route::resource('notas', NotaController::class);
