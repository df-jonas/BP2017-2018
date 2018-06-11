<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentSkill extends Model
{
    protected $table = 'assessmentskills';

    public function skill()
    {
        return $this->belongsTo('App\Skill', 'skill_id', 'id');
    }

    public function assessment(){
        return $this->hasOne('App\Assessment', 'assessment_id', 'id');
    }
}