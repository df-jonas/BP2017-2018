<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skills';

    public function assessmentskills()
    {
        return $this->hasMany('App\AssessmentSkill', 'skill_id', 'id');
    }
}