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

    /**
     * Create a new message instance.
     */
    public function __construct($channelName, $channelToEmail, $clientName, $clientToEmail, $campaign, $videos)
    {
        //
        $this->campaign = $campaign;
        $this->videos = $videos;
        $this->channelName = $channelName;
        $this->channelToEmail = $channelToEmail;
        $this->clientName = $clientName;
        $this->clientToEmail = $clientToEmail;
    }


    public function build()
    {
        return $this->view('emails.campaign-video-selection')
                    ->subject('Selected Videos for Campaign')
                    ->with([
                        'campaign' => $this->campaign,
                        'videos' => $this->videos,
                        'channelName' => $this->channelName,
                        'channelToEmail' => $this->channelToEmail,
                        'clientName' => $this->clientName,
                        'clientToEmail' => $this->clientToEmail,
                    ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Campaign Video Selection Mail',
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
}
