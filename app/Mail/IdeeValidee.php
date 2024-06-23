<?php

namespace App\Mail;

use App\Models\Idee;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IdeeValidee extends Mailable
{
    use Queueable, SerializesModels;

    public $idee;

    public function __construct(Idee $idee)
    {
        $this->idee = $idee;
    }

    public function build()
    {
        return $this->from('faabintu@gmail.com')->subject('Votre idée a été approuvée')
                    ->view('idees.approuvee');
    }
}
