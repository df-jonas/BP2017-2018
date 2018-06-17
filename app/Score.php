<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';

    public function from()
    {
        return $this->belongsTo('App\AssessmentGroupUser', 'assessmentgroupuser_from_id');
    }

    public function to()
    {
        return $this->belongsTo('App\AssessmentGroupUser', 'assessmentgroupuser_to_id');
    }

    public function assessmentskill()
    {
        return $this->belongsTo('App\AssessmentSkill', 'assessmentskill_id');
    }
}