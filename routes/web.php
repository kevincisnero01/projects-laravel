<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::get('/projects', [ProjectController::class,'index'])->name('projects');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', [ContactController::class,'store'])->name('contact.store');