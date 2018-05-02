<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PostComment extends Notification
{
    use Queueable;
    private $post;
    private $comment;
    private $url;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post, $comment, $url)
    {
        $this->post = $post;
        $this->comment = $comment;
        $this->url = $url;
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
        //$username = $this->user->first_name;
        return [
            /*
            'thread' => $this->thread,
            'user' => $notifiable
            */
            'id' => $this->post->id,
            'title' => $this->post->title,
            'data' => $this->post->created_at,
            'commenter' => $this->comment->user->first_name,
            'comment_title' => $this ->comment->content,
            'url' => $this->url
        ];
    }
}
