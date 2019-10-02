<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Vendedor extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $product;
    private $vendedor;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $product, $vendedor)
    {
        $this->user = $user;
        $this->product = $product;
        $this->vendedor = $vendedor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.vendedor')->with('user', $this->user)->with('vendedor', $this->vendedor)
            ->with('product', $this->product)->subject('Te han comprado en FromaPop');
    }
}
