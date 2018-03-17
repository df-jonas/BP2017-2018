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

class Comment extends Model
{
    protected $table = "comments";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }

    public function commentcreated()
    {
        return DateTimeHumanizer::difference(new \DateTime(), $this->created_at, "nl");
    }
}