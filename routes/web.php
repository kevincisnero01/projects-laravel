<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'about')->name('about');

Route::get('/proyectos', [ProjectController::class,'index'])->name('projects.index');
Route::get('/proyectos/{project}', [ProjectController::class,'show'])->name('projects.show');

Route::view('/contacto', 'contact')->name('contact');

Route::post('/contacto', [ContactController::class,'store'])->name('contact.store');