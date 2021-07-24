<?php

Route::get('/', function(){
    echo "<a href='".route('contacto')."'>Contacto 1</a><br>";
    echo "<a href='".route('contacto')."'>Contacto 2</a><br>";
    echo "<a href='".route('contacto')."'>Contacto 3</a><br>";
    echo "<a href='".route('contacto')."'>Contacto 4</a><br>";
    echo "<a href='".route('contacto')."'>Contacto 5</a><br>";
});

//Route Name: se hace referencia al nombre de la ruta y no a la URL
Route::get('contactame/{name?}', function($name = "invitado"){
    return "hola $name, Bienvenido a contacto";
})->name('contacto');