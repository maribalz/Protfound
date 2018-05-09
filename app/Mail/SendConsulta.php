<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConsulta extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;
    public $apellido;
    public $email;
    public $empresa;
    public $mensaje;
    public $tabla;

    public function __construct($nombre,$apellido, $email, $empresa, $mensaje,$tabla)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->empresa = $empresa;
        $this->mensaje = $mensaje;
        $this->tabla = $tabla;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('pages.mailcotiza')->with([
                        'nombre' => $this->nombre,
                        'apellido' => $this->apellido,
                        'email' => $this->email,
                        'empresa' => $this->empresa,
                        'mensaje' => $this->mensaje,    
                        'tabla' => $this->tabla
                        ]);
    }
}
