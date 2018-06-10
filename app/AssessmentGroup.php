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

    public function assessmentgroupusers()
    {
        return $this->hasMany('App\AssessmentGroupUser', 'assessmentgroup_id', 'id');
    }

    public function memberCount()
    {
        return $this->assessmentgroupusers()->count();
    }

    public function submitCount()
    {
        $amount = 0;
        foreach ($this->assessmentgroupusers()->get() as $user) {
            if ($user->hasSubmitted()) {
                $amount++;
            }
        }
        return $amount;
    }

    public function url()
    {
        return route('assessment-docent-group', [
            'assessment_id' => $this->assessment->id,
            'group_id' => $this->id
        ]);
    }
}