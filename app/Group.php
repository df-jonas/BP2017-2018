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
use Illuminate\Support\Facades\Log;

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

    public function postcount()
    {
        return $this->post()->count();
    }

    public function lastupdate()
    {
        if ($this->postcount() == 0) {
            $date = new \DateTime($this->updated_at);
        } else {
            $date = new \DateTime($this->post()->orderBy('created_at', 'desc')->first()->created_at);
        }
        return DateTimeHumanizer::difference(new \DateTime(), $date, "nl");
    }

    public function url()
    {
        return route("community-group-detail", ["group_id" => $this->url]);
    }
}