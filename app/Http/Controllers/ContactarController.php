<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotificacionContacto;
use Illuminate\Support\Facades\Mail;

class ContactarController extends Controller
{
    public function create()
    {
        return view('contacto');
    }

        /**
     * Método para enviar o formulario de contacto.
     */
    public function enviar(Request $request)
    {



        $validated = $request->validate([

            'contido' => 'required'
            

        ]); 


        // Creamos un obxeto da clase NotificacionContacto
        
        $mailable = new NotificacionContacto($request->nome, $request->mail, $request->mobil, $request->contido);
    
        // dd($mailable);




        // Enviamos o correo ao destinatario
        Mail::to('noaga01@gmail.com')->send($mailable);


        return back()->with('estado', 'Mensaxe enviada correctamente, gracias! :)');

    }

}
