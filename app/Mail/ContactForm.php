<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var \App\Models\ContactForm
     */
    private $contactForm;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\ContactForm $contactForm
     */
    public function __construct(\App\Models\ContactForm $contactForm)
    {
        $this->contactForm = $contactForm;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('mail@nikkinailsandmore.nl')
            ->view('mail.contactform', [
                'contactForm' => $this->contactForm,
            ]);
    }
}
