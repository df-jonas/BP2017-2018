<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserTutoringRequest extends Notification
{
    use Queueable;
    private $tutoringsession;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($tutoringsession)
    {
        $this->tutoringsession = $tutoringsession;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->tutoringsession->id,
            'data' => $this->tutoringsession->created_at,
            'tutor' => $this->tutoringsession->tutor->user->first_name,
            'tutee' => $this->tutoringsession->tutee->user->first_name,
            'melding' => 'Nieuw tutoring verzoek'
        ];
    }
}
