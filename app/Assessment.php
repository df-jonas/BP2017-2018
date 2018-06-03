<?php

namespace App;

use Carbon\Carbon;
use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';

    protected $dates = ['end'];

    public function assessmentskills()
    {
        return $this->hasMany('App\AssessmentSkill', 'assessmentskill_id', 'id');
    }

    public function assessmentgroups()
    {
        return $this->hasMany('App\AssessmentGroup', 'assessment_id', 'id');
    }

    public function creator()
    {
        return $this->belongsTo('App\User', 'docent_id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

    public function memberCount()
    {
        $amount = 0;
        $groups = $this->assessmentgroups()->withCount('assessmentgroupusers')->get();
        foreach ($groups as $group) {
            $amount += $group->assessmentgroupusers_count;
        }
        return $amount;
    }

    public function timeToEnd() {
        return DateTimeHumanizer::difference(new \DateTime(), $this->end, 'nl');
    }

    public function humanEnd(){
        return $this->end->format(('d/m/Y \o\m H:i'));
    }
}