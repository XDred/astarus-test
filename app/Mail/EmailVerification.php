<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

	protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->view('email.email')->with([
			'email_token' => $this->user->email_token,
		]);
		/*return (new MailMessage)
            ->line('Click the Link To Verify Your Email.')
            ->action('Verify Email', url(config('app.url').route('verifyemail', ['token' => $this->user->email_token], false)));*/
    }
}
