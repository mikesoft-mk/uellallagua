<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistroUsuariofController;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    Route::get('/regusuarios', [RegistroUsuariofController::class, 'mostrarPanel'])->name('profesores.vista');

    
    Route::post('/regusuarios/guardar', [RegistroUsuariofController::class, 'guardarProfesor'])->name('profesores.guardar');

    
    Route::put('/regusuarios/actualizar/{id}', [RegistroUsuariofController::class, 'actualizarProfesor'])->name('profesores.actualizar');

    
    Route::delete('/regusuarios/eliminar/{id}', [RegistroUsuariofController::class, 'eliminarProfesor'])->name('profesores.eliminar');

    

});


