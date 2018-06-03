<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentGroup extends Model
{
    protected $table = 'assessmentgroups';

    public function assessment()
    {
        return $this->belongsTo('App\Assessment', 'assessment_id');
    }

    public function assessmentgroupusers(){
        return $this->hasMany('App\AssessmentGroupUser', 'assessmentgroup_id', 'id');
    }
}