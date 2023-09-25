<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CareerRequestMail extends Mailable
{
    use Queueable, SerializesModels;

   public $info;
   //nella funzione __construct() andiamo a specificare come la classe deve gestire le informazioni dell’utente;
    public function __construct($info)
    {
        $this->info=$info;
    }
    //nella funzione envelope(), busta, andiamo a inserire le informazioni riguardo i dettagli della mail (come oggetto, cc, ccn ecc…);
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Richiesta di lavoro ricevuta',
        );
    }
    //nella funzione content(), contenuto, andiamo a specificare quale vista vogliamo che l’utente visualizzi quando riceve la mail.
    public function content(): Content
    {
        return new Content(
            view: 'mail.career-request-mail',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
