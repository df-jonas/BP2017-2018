<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicationYear extends Model
{
    protected $table = 'publicationyears';

    public function files() {
        return $this->hasMany('App\File');
    }
}