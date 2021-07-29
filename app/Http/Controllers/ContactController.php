<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function store(){
        
        $datos = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);


        Mail::to('kevincisnero01@gmail.com')->send(new MessageReceived($datos));

        return "Correo Enviado";
    }
}
