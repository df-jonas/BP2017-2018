<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';

    public function file()
    {
        return $this->belongsTo('App\File', 'fileid');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'userid');
    }
}