<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados)
    {
        $this->dados = $dados;
        //dd($this->dados);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('emails.contatoEmail');
        
        /*
        return $this->from('to@email.com')
                ->view('emails.contatoEmail)
                ->with([
                    'dados' => $this->dados,
                ]);
        */

//dd(public_path().$this->dados['arquivo']);

        //->attach()
        return $this->subject("Contato via site: " . $this->dados['nome'])
                ->attach(public_path().$this->dados['arquivo'])                
                ->view('emails.contatoEmail')
                ->with([
                    'dados' => $this->dados
                ]);
    }
}
