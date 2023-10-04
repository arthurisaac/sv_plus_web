<?php

namespace App\Notifications;

use App\Models\Alerte;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AlerteNotification extends Notification
{
    use Queueable;

    private $alertData;

    /**
     * Create a new notification instance.
     */
    public function __construct(Alerte $alert)
    {
        $this->alertData = $alert;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        //return ['mail','database'];
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Nouvelle alerte sur sauvie.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'alerte' => $this->alertData['id']
        ];
    }

    public function toBroadcast(object $notifiable)
    {
        return new BroadcastMessage([
            'alerte' => $this->alertData['id']
        ]);
    }
}
