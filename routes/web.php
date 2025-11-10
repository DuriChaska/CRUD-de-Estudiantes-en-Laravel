<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;    
use App\Http\Controllers\EstudianteController; 

Route::get('/carreras', [CarreraController::class, 'index'])->name('carreras.index');
Route::get('/carreras/create', [CarreraController::class, 'create'])->name('carreras.create');
Route::post('/carreras/store', [CarreraController::class, 'store'])->name('carreras.store');
Route::get('/carreras/edit/{id}', [CarreraController::class, 'edit'])->name('carreras.edit');
Route::put('/carreras/update/{id}', [CarreraController::class, 'update'])->name('carreras.update');
Route::delete('/carreras/delete/{id}', [CarreraController::class, 'delete'])->name('carreras.delete');

Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');
Route::post('/estudiantes/store', [EstudianteController::class, 'store'])->name('estudiantes.store');
Route::get('/estudiantes/{estudiante}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');
Route::put('/estudiantes/{estudiante}', [EstudianteController::class, 'update'])->name('estudiantes.update');
Route::delete('/estudiantes/delete/{id}', [EstudianteController::class, 'delete'])->name('estudiantes.delete');
Route::get('/estudiantes/view/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});



