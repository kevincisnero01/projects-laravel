<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    function store(){
        
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ],[
            "name.required" => "Es obligatorio ingresar este campo"
        ]);

        return 'Datos Validados';
    }
}
