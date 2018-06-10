<?php

namespace App;

use Carbon\Carbon;
use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Assessment extends Model
{
    protected $table = 'assessments';

    protected $dates = ['end'];

    public function assessmentskills()
    {
        return $this->hasMany('App\AssessmentSkill', 'assessment_id', 'id');
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
        foreach ($this->assessmentgroups()->get() as $group) {
            $amount += $group->memberCount();
        }
        return $amount;
    }

    public function submitCount(){
        $amount = 0;
        foreach ($this->assessmentgroups()->get() as $assessmentgroup) {
            $amount += $assessmentgroup->submitCount();
        }
        return $amount;
    }

    public function groupCount()
    {
        return $this->assessmentgroups()->count();
    }

    public function timeToEnd()
    {
        return DateTimeHumanizer::difference(new \DateTime(), $this->end, 'nl');
    }

    public function humanEnd()
    {
        return $this->end->format(('d/m/Y \o\m H:i'));
    }

    public function url()
    {
        return route('assessment-detail', ['assessment_id' => $this->id]);
    }
}