<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BetPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public $tn;
    public $total;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($tn ,  $total)
    {
        $this->tn = $tn;
        $this->total = $total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.send');
    }
}
