<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    protected $table = 'courses';

    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function assessments()
    {
        return $this->hasMany('App\Assessment', "course_id", "id");
    }

    public function assessmentCount() {
        return $this->assessments()->where("docent_id", "=", Auth::id())->count();
    }

    public function assessmentMemberCount() {
        $amount = 0;
        foreach ($this->assessments()->where("docent_id", "=", Auth::id())->get() as $assessment) {
            $amount += $assessment->memberCount();
        }
        return $amount;
    }
}