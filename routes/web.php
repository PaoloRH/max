<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\{Comentario,Estudiante};

use App\Http\Controllers\Estudiantes\EstudiantesController;
use App\Http\Controllers\Notas\NotasController;
use App\Http\Controllers\Auth\LoginController;

/*En proceso (probablemente lo borre)
Route::get('/', function () {
    
    $estudiante = new Estudiante();
    $estudiante->nombres = 'Jose';
    $estudiante->pri_ape = 'Sanchez';
    $estudiante->seg_ape = 'Carrion';
    $estudiante->save();

    return $estudiante;

    /*$estudiante = Estudiante::create([
        'codigo' => '1002',
        'nombres' => 'Edickzon',
        'pri_ape' => 'Veramendi',
        'seg_ape' => 'Malpartida',
        'dni'   => '67484937',
    ]);

    $estudiante->comentarios()->create([
        'descripcion' => 'Ud. ha cumplido con su trabajo',
        'curso' => 'Ing. de Sofware con Met. Agiles'
    ]);

    return $estudiante;

    $estudiante = Estudiante::find(3);

    $estudiante->comentarios()->create([
        'descripcion' => 'Ud. tambien esta fino en Java.',
        'curso' => 'Java Developer'
    ]);

    return $estudiante;

    //$estudiante = Estudiante::get();
    //dd($estudiante);

    //$comentario = Comentario::where('estudiante_id', 3)->get();
    //return $comentario;

    return view('welcome');
});*/

Route::get('/', [LoginController::class, 'showLoginForm']);

/*En proceso (probablemente lo borre)

Route::get('/saludos', function() {
    return 'Hola amiguitos!';
})->name('saluditos');

Route::get('/bienvenidos', function() {
    return view('bienvenidos');
})->name('bienvenidos');

Route::get('/estudiantes', function() {
    return View::make('estudiantes');
})->name('estudiantes');*/

// Rutas de estudiante (por ahora esta en profesor)
Route::get('/estudiantes/index', [EstudiantesController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudiantesController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudiantesController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/edit/{id}', [EstudiantesController::class, 'edit'])->name('estudiantes.edit');
Route::post('/estudiantes/update/{estudiante}', [EstudiantesController::class, 'update'])->name('estudiantes.update');
/*En proceso (probablemente lo borre)
Route::get('/estudiantes/delete/{id}', [EstudiantesController::class, 'delete'])->name('estudiantes.delete');*/
Route::post('/estudiantes/destroy/{estudiante}', [EstudiantesController::class, 'destroy'])->name('estudiantes.destroy');

// Ruta nota, el profesor podra observar las notas del estudiante 
Route::get('/notas/index', [NotasController::class, 'index'])->name('notas.index');

// Rutas de autenticación 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ruta Welcome para el profesor
Route::get('/welcome', function () {
    return view('welcome'); 
})->middleware('auth')->name('welcome');


// Mostrar formulario de simulación
Route::get('/notas/simulacion', [NotasController::class, 'simulacion'])->name('notas.simulacion');

// Procesar formulario y calcular promedio
Route::post('/notas/simulacion', [NotasController::class, 'calcularSimulacion'])->name('notas.simulacion.calcular');
