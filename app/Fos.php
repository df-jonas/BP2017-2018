<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fos extends Model
{
    protected $table = 'field_of_study';

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }
}