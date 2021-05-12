<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

        public $infoCustomer;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($infoCustomer)
    {
        $this->infoCustomer = $infoCustomer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->to($this->infoCustomer['email'])
            ->from('no-reply@soportemanheim.es', 'Manheim Soporte')
            ->to('gestoradministrativosubastas@manheim.es')
            ->bcc('enrique.gonzalez@manheim.es')
            ->subject($this->infoCustomer['subject'])
            ->with(['msg' => $this->infoCustomer])
            ->view('emails.message-received');
        
    }

    
}
