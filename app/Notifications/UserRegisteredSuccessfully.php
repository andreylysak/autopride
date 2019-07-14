<?php

namespace App\Notifications;

use App\Profile;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;

    protected $account_name;
    protected $account_activation_code;

    public function __construct($account_name, $account_activation_code)
    {
        $this->account_name = $account_name;
        $this->account_activation_code = $account_activation_code;
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
            ->greeting(sprintf('Hello %s', $account_name))
            ->line('You have successfully registered to our system. Please activate your account.')
            ->action('Click Here', route('activate.user', $account_activation_code))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public static function notifyAccount($account_name, $account_activation_code) {
        return (new MailMessage)
            ->from(env('ADMIN_MAIL'))
            ->subject('Successfully created new account')
            ->greeting(sprintf('Hello %s', $account_name))
            ->line('You have successfully registered to our system. Please activate your account.')
            ->action('Click Here', route('activate.user', $account_activation_code))
            ->line('Thank you for using our application!');
    }
}
