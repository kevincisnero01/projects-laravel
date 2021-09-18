<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'about')->name('about');

Route::resource('proyecto', ProjectController::class)
->names('projects')
->parameters(['proyecto' => 'project']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('/contacto', [ContactController::class,'store'])->name('contact.store');

Auth::routes();
