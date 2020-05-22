<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $nombre;

    public function __construct($data,$email,$nombre)
    {
        $this->data = $data;
        $this->email = $email;
        $this->nombre = $nombre;
    }

    public function build()
    {
        $this->to($this->data['email']);
        $this->bcc('marcos@dte-online.com');
        $this->subject('Notificación Formulario Contacto Sistema Adjudicados');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.contacto',[
            'data' => $this->data
        ]);
    }
}
