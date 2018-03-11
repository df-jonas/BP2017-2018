<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:32
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class GroupIcon extends Model
{
    protected $table = "groupicons";

    public function groups()
    {
        return $this->hasMany('App\Group', 'icon_id');
    }
}