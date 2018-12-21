<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmationEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!')

                    ->subject('FinVat Account Creation') // it will use this class name if you don't specify
                    ->greeting('Dear Sir / Madam') // example: Dear Sir, Hello Madam, etc ...
                    ->level('success')// It is kind of email. Available options: info, success, error. Default: info
                    ->line('You are receiving this email because we received an account creation request with your email')
                    ->action('Reset Password', url(config('app.url').route('login')))
                    // ->action('Activate Account', url('/'))
                    ->line('If you did not request an account creation, no further action is required.!')
                    ->salutation('Best regards');  // example: best regards, thanks, etc ...

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
