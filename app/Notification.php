<?php

namespace App;

use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Notification extends Model
{
    protected $table = 'notifications';

    public function to()
    {
        return $this->belongsTo('App\User', 'to_user');
    }

    public function from()
    {
        return $this->belongsTo('App\User', 'from_user');
    }

    public function markAsRead()
    {
        $this->read_at = new DateTime();
    }
    public function isRead()
    {
        return $this->read_at;
    }
    public function notificationcreated()
    {
        return DateTimeHumanizer::difference(new \DateTime(), $this->created_at, "nl");
    }
}