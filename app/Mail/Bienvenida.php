<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Bienvenida extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $user;
    public $password;

    public function __construct($user,$password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function build()
    {
        $this->to($this->user->email);
        $this->bcc('cristian.almanzar@dte-online.com');
        $this->subject('Bienvenido a Adjudicados');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.bienvenida',[
            'user' => $this->user,
            'password' => $this->password
        ]);
    }
}
