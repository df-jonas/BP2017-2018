<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctype extends Model
{
    protected $table = 'documenttypes';

    public function files()
    {
        return $this->hasMany('App\File');
    }
}