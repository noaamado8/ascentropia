<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionContacto extends Mailable
{
    use Queueable, SerializesModels;
    protected $nome, $mail, $mobil, $contido;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nome, $mail, $mobil, $contido)
    {
        //
   $this->nome = $nome;
        $this->mail = $mail;
        $this->mobil = $mobil;
        $this->contido = $contido;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    return $this->view('correos.contidomail')
            ->subject("Contacto dende o formulario da web")
            ->with([
                "nome" => $this->nome,
                "mail" => $this->mail,
                "mobil" => $this->mobil,
                "contido" => $this->contido
            ]);    }
}
