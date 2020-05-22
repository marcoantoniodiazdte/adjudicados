<?php

use App\Tema;
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EstadoOportunidad extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $email;
    public $nombre;
    
    public function __construct($user, $status)
    {
        $this->user = $user;
        $this->status = $status;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->to($this->user->email);
        $this->bcc('cristian.almanzar@dte-online.com');
        $this->subject('Cambio de Estado');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.estado_oportunidad', [
            'user' => $this->user,
            'status' => $this->status,
        ]);
    }
}
