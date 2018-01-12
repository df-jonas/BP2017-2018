<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'campuses';

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function files()
    {
        return $this->hasMany('App\File');
    }
}