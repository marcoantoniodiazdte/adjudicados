<?php

use App\Tema;
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmacionContacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($data, $email,$nombre)
    {
        $this->data = $data;
        $this->email = $email;
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to('cristian.almanzar@dte-online.com');
        $this->bcc('marcos@dte-online.com');
        $this->subject('Confirmación');
        return $this->from($address = 'notificaciones@adjudicados.com',$name = $this->nombre)->view('mails.confirmacion_contacto');
    }
}
