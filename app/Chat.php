<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:31
 */

namespace App;


use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = "chats";

    public function tutoringsessions()
    {
        return $this->hasMany('App\TutoringSession', 'tutoringsession_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function chatcreated()
    {
        return DateTimeHumanizer::difference(new \DateTime(), $this->created_at, "nl");
    }
}