<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutoringSession extends Model
{
    protected $table = 'tutoringsessions';

    public function tutor()
    {
        return $this->hasOne('App\Tutor', 'id', 'tutor_id');
    }

    public function tutee()
    {
        return $this->hasOne('App\Tutee', 'id', 'tutee_id');
    }
}