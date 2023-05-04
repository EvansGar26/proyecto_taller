<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Support\Facades\Mail;

class EmailConfClaseMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Conferencia nueva";
    public $datos;
    public $rutaVerConferencias;
    /**
     * Create a new message instance.
     */
    public function __construct($datos,$rutaVerConferencias)
    {
        $this->datos = $datos;
        $this->rutaVerConferencias = $rutaVerConferencias;
    }

    public function build(){
        return $this->view('emails.emailConf')->with('datos',$this->datos)->with('rutaVerConferencias',$this->rutaVerConferencias);
    }
}
