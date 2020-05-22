<?php

use App\Tema;
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CancelarOfertaAnalista extends Mailable
{
    use Queueable, SerializesModels;

 

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
        $this->bcc('cristian.almanzar@dte-online.com', 'marcos@dte-online');
        $this->subject('Cancelación Oferta');
        return $this->from($address = 'notificaciones@adjudicados.com', $name = 'Sistema Adjudicados')->view('mails.cancelar_contra_oferta_analista');
    }
}
