<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sendbymail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $telefono;
    public $email;
    public $empresa;
    public $mensaje;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $email, $empresa, $mensaje, $telefono)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->empresa = $empresa;
        $this->mensaje = $mensaje;
        $this->telefono = $telefono;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mail')->with([
                        'nombre' => $this->nombre,
                        'email' => $this->email,
                        'empresa' => $this->empresa,
                        'mensaje' => $this->mensaje,    
                        'telefono' => $this->telefono
                        ]);
    }
}
