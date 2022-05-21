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
     * @return
     */
    public function build()
    {
        $subject = $this->markdown('email.attachment')->subject('Tenant Information');
        if ($this -> data['studentPermit'] != null) {
            $subject = $subject->attach($this->data['studentPermit']->getRealPath(), [
                'as' => $this->data['studentPermit']->getClientOriginalName()
            ]);
        }
        if ($this -> data['offer'] != null) {
            $subject = $subject->attach($this->data['offer']->getRealPath(), [
                'as' => $this->data['offer']->getClientOriginalName()
            ]);
        }
        if ($this -> data['passport'] != null) {
            $subject = $subject->attach($this->data['passport']->getRealPath(), [
                'as' => $this->data['passport']->getClientOriginalName()
            ]);
        }
        if ($this -> data['bank'] != null) {
            $subject = $subject->attach($this->data['bank']->getRealPath(), [
                'as' => $this->data['bank']->getClientOriginalName()
            ]);
        }
        return $subject>with($this->data);
    }
}
