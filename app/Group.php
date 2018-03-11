<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:34
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = "groups";

    public function post()
    {
        return $this->hasMany('App\Post', 'group_id');
    }

    public function icon()
    {
        return $this->belongsTo('App\GroupIcon', 'icon_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\GroupCategory', 'category_id');
    }
}