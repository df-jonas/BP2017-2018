<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegister extends Notification
{
    use Queueable;
    private $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //view parameters
        $username = $this->user->first_name;
        //button url
        $url = 'https://www.unihelp.be';
        //mail image src
        $header = 'https://unihelp.be/img/backgrounds/banner.png';
        $image1 = 'https://www.unihelp.be/img/features/1.jpg';
        $image2 = 'https://www.unihelp.be/img/features/4.jpg';
        $image3 = 'https://www.unihelp.be/img/features/5.jpg';
        $image4 = 'https://unihelp.be/img/backgrounds/wat-1.png';
        //mail view: notification > register view
        return (new MailMessage)
            ->markdown('mail.notification.register', ['username' => $username, 'url' => $url, 'header' => $header, 'image1' => $image1, 'image2' => $image2, 'image3' => $image3, 'image4' => $image4])
            ->subject('Welkom bij UniHelp');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}