<?php

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/portfolio', 'portfolio')->name('portfolio');

Route::view('/contact', 'contact')->name('contact');

/*
//Retornar vistas #1
Route::get('/', function(){ 
    return view('home'); 
});

//Pasar vistas #2 forma simplificada 
Route::view('/', 'home'); // Ej: para paginas como politicas de privacidad, terminos y condiciones, etc

//Pasar datos #4 con la funcion compact() que crea un array con los datos recibidos como parametros
Route::get('/', function(){ 
    $nombre = "yheisson"; 
    return view('home', compact('nombre')); //Ej: ['nombre' => $nombre]
});

//Pasar datos #3 con la funcion view() pasandole un array como parametros
Route::get('/', function(){ 
    return view('home',['nombre' =>'genesis']); 
});

//Pasar datos #2 con la funcion with() pasandole un array como parametro
Route::get('/', function(){ 
    return view('home')->with(['nombre' =>'vaneska']); 
});

//Pasar datos #1 con la funcion with() 
Route::get('/', function(){ 
    return view('home')->with('nombre','kevin'); 
});

*/