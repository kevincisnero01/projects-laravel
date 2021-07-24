<?php

Route::get('/', function(){
    return "hola, Bienvenido al mundo laravel";
});

Route::get('contacto/{name?}', function($name = "invitado"){
    return "hola $name, Bienvenido a contacto";
});