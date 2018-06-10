<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->assessments()->count();
    }

    public function assessmentMemberCount() {
        $amount = 0;
        foreach ($this->assessments()->get() as $assessment) {
            $amount += $assessment->memberCount();
        }
        return $amount;
    }
}