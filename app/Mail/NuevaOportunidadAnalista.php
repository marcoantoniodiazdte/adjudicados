<?php

use App\Tema;
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NuevaOportunidadAnalista extends Mailable
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
        $str1 = 'notificaciones@adjudicados.com';
        $str2 = 'Sistema Adjudicados';
        $this->to($this->email);
        $this->bcc('cristian.almanzar@gmail.com');
        $this->subject('Nueva Oportunidad');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.nueva_oportunidad', [
            'data' => $this->data
        ]);
    }
}
