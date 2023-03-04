<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
//use Illuminate\Mail\Mailables\Content;
//use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
   // public function envelope(): Envelope
    //{
      //  return new Envelope(
        //    subject: 'Sendmail',
        //);
   // }

    /**
     * Get the message content definition.
     */

     // sending all contact information email template blade

     public function build()
     {
             return $this->from('parekhaneri56@gmail.com')->subject('Contact us Email send information')->view('creative-agency.emailtemplete')->with('data', $this->data);
     }
     
  //  public function content(): Content
    //{
      //  return new Content(
        //    view: 'view.name',
        //);
    //}

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
   // public function attachments(): array
    //{
      //  return [];
   // }
}
