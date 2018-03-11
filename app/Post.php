<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:34
 */

namespace App;


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
        return $this->hasMany('App\Comments', 'post_id');
    }
}