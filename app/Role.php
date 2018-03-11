<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:35
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    public function users()
    {
        return $this->hasMany('App\User', 'role');
    }
}