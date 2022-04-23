<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmialForm extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.attachment')->subject('testest')->attach($this->data['studentPermit']->getRealPath(), [
            'as' => $this->data['studentPermit']->getClientOriginalName()
        ])->attach($this->data['offer']->getRealPath(), [
            'as' => $this->data['offer']->getClientOriginalName()
        ])->attach($this->data['passport']->getRealPath(), [
            'as' => $this->data['passport']->getClientOriginalName()
        ])->with($this->data);
    }
}
