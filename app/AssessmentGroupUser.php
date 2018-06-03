<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessmentGroupUser extends Model
{
    protected $table = 'assessmentgroupusers';

    public function assessmentgroup()
    {
        return $this->belongsTo('App\AssessmentGroup', 'assessmentgroup_id');
    }

    public function users()
    {
        return $this->hasMany('App\User', 'user_id', 'id');
    }

    public function givenscores(){
        return $this->hasMany('App\Score', 'assessmentgroupuser_from_id', 'id');
    }

    public function receivedcores(){
        return $this->hasMany('App\Score', 'assessmentgroupuser_to_id', 'id');
    }
}