<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'about')->name('about');

Route::get('/proyectos', [ProjectController::class,'index'])->name('projects.index');
Route::get('/proyectos/create', [ProjectController::class,'create'])->name('projects.create');
Route::get('/proyectos/{project}', [ProjectController::class,'show'])->name('projects.show');
Route::post('/proyectos', [ProjectController::class,'store'])->name('projects.store');
Route::get('/proyectos/{project}/edit', [ProjectController::class,'edit'])->name('projects.edit');
Route::put('/proyectos/{project}', [ProjectController::class,'update'])->name('projects.update');
Route::delete('/proyectos/{project}', [ProjectController::class,'destroy'])->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');
Route::post('/contacto', [ContactController::class,'store'])->name('contact.store');