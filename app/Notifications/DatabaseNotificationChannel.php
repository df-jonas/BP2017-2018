<?php
/**
 * Created by PhpStorm.
 * User: arnostalpaert
 * Date: 5/05/18
 * Time: 16:00
 */

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class DatabaseNotificationChannel
{
    public function send($notifiable, Notification $notification)
    {
        $data = $notification->toDatabase($notifiable);
        //TODO titel, commenter, url, user id ophalen van post
        return $notifiable->routeNotificationFor('database', $notification)->create([
            'id' => $notification->id,
            'user_id' => $notification->user()->id,
            'commenter_id' => Auth::id(),
            'type' => get_class($notification),
            'data' => $this->getData($notifiable, $notification),
            'read_at' => null,
            'title' => 'yooo',
        ]);

    }

    protected function getData($notifiable, Notification $notification)
    {
        if (method_exists($notification, 'toDatabase')) {
            return is_array($data = $notification->toDatabase($notifiable))
                ? $data : $data->data;
        }

        if (method_exists($notification, 'toArray')) {
            return $notification->toArray($notifiable);
        }

        throw new RuntimeException(
            'Notification is missing toDatabase / toArray method.'
        );
    }
}