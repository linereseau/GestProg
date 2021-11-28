<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\DemandeProgramme;
class DemandeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $mymsg;

    public function __construct(DemandeProgramme $lastDemande)
    {
        $this->mymsg = $lastDemande;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('fatsal@gmail.com','GesProg')
                ->subject('Nouvelle Demande')
                ->view('mails.DemandeMail');
    }
}
