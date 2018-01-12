<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $table = 'degrees';

    public function files()
    {
        return $this->hasMany('App\File');
    }
}