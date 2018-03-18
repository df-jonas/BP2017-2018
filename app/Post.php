<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:34
 */

namespace App;


use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'post_id')->orderBy('created_at', 'desc');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote', 'post_id');
    }

    public function commentcount()
    {
        return $this->comments()->count();
    }

    public function votesum()
    {
        return $this->votes()->sum("value");
    }

    public function postcreated()
    {
        return DateTimeHumanizer::difference(new \DateTime(), $this->created_at, "nl");
    }

    public function postcreatedprecise()
    {
        return DateTimeHumanizer::preciseDifference(new \DateTime(), $this->created_at, "nl");
    }

    public function generateurl()
    {
        return route('community-post-detail', ['group_id' => $this->group->url, 'post_id' => $this->id]);
    }
}