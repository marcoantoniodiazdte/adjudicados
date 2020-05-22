<?php

use App\Tema;
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmacionContraOfertaUsuario extends Mailable
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

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->email);
        $this->bcc('cristian.almanzar@dte-online.com');
        $this->subject('Confirmación de Contra Oferta Realizada');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.contra_oferta_usuario');
    }
}
