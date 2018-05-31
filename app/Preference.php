<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $table = "preferences";

    public function users()
    {
        return $this->hasOne('App\User', 'preference_id');
    }
}
