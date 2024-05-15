<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactFormMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('contact')
            ->with('data', $this->data);
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Form Mailable',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function enviar(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|max:30',
            'email' => 'required|email|max:30',
            'telefono' => 'nullable|digits_between:7,10',
            'mensaje' => 'required|max:300',
        ]);

        Mail::to('mngabilondo@gmail.com')->send(new ContactFormMailable($data));

        return back()->with('success', 'Gracias por contactarnos!');
    }
}
