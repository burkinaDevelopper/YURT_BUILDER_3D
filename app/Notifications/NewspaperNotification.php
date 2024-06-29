<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Newspaper;

class NewspaperNotification extends Notification
{
    use Queueable;

    protected Newspaper $subscription;

    /**
     * Create a new notification instance.
     */
    public function __construct(Newspaper $subscription)
    {
        $this->subscription=$subscription;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Souscription')
        ->greeting('Welcome to our website')
        ->line("Your subscription to the program ".config('app.name')." was successfully completed")
        ->action('unsubscribe', route('unsubscribe.delete',[$this->subscription->token]))
        ->line('Access our web page '.config("app.url"))
        ->line('thank you for your trust');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
