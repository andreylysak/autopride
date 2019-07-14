<?php

namespace App\Notifications;

use App\Profile;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;

    protected $account;

    public function __construct(Profile $account)
    {
        $this->account = $account;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $account = $this->account;

        return (new MailMessage)
            ->from(env('ADMIN_MAIL'))
            ->subject('Successfully created new account')
            ->greeting(sprintf('Hello %s', $account->name))
            ->line('You have successfully registered to our system. Please activate your account.')
            ->action('Click Here', route('activate.user', $account->activation_code))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
