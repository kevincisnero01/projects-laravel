<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\UserController;

Route::view('/', 'home')->name('home');

Route::view('/quienes-somos', 'about')->name('about');

Route::resource('proyecto', ProjectController::class)
->names('projects')
->parameters(['proyecto' => 'project']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('/contacto', [ContactController::class,'store'])->name('contact.store');

Auth::routes();
Route::get('usuario/perfil', [UserController::class,'profile'])->name('users.profile');
Route::put('usuario/perfil', [UserController::class,'profile_update'])->name('users.profile.update');

Route::get('usuario', [UserController::class,'index'])->name('users.index');
Route::post('usuario/registro', [UserController::class,'register'])->name('users.register');
Route::put('usuario/update/{user}', [UserController::class,'update'])->name('users.update');
