<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CampaignVideoSelectionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $campaign;
    public $videos;
    public $channelName;
    public $channelToEmail;
    public $clientName;
    public $clientToEmail;
    public $orderID;
    public $brandName;
    public $agency;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     */
    public function __construct($channelName, $channelToEmail, $clientName, $clientToEmail, $campaign, $videos, $orderID, $brandName, $agency, $subject, $message)
    {
        //
        $this->campaign = $campaign;
        $this->videos = $videos;
        $this->channelName = $channelName;
        $this->channelToEmail = $channelToEmail;
        $this->clientName = $clientName;
        $this->clientToEmail = $clientToEmail;
        $this->orderID = $orderID;
        $this->brandName = $brandName;
        $this->agency = $agency;
        $this->subject = $subject;
        $this->message = $message;
    }


    public function build()
    {
        return $this->view('emails.email-template')
                    ->subject($this->subject)
                    ->with([
                        'campaign' => $this->campaign,
                        'videos' => $this->videos,
                        'channelName' => $this->channelName,
                        'channelToEmail' => $this->channelToEmail,
                        'clientName' => $this->clientName,
                        'clientToEmail' => $this->clientToEmail,
                        'orderID' => $this->orderID,
                        'brandName' => $this->brandName,
                        'agency' => $this->agency,
                        'message' => $this->message
                    ]);
    }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Campaign Video Selection Mail',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
}
