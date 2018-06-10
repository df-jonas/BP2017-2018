<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AssessmentGroupUser extends Model
{
    protected $table = 'assessmentgroupusers';

    public function assessmentgroup()
    {
        return $this->belongsTo('App\AssessmentGroup', 'assessmentgroup_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function givenscores()
    {
        return $this->hasMany('App\Score', 'assessmentgroupuser_from_id', 'id');
    }

    public function receivedscores()
    {
        return $this->hasMany('App\Score', 'assessmentgroupuser_to_id', 'id');
    }

    public function lastgivenscores()
    {
        $ids = array_column(Score::query()->select(DB::raw('max(id) as id'))->groupBy(['assessmentgroupuser_to_id', 'assessmentskill_id'])->get()->toArray(), 'id');

        $resultset = $this->givenscores()->whereIn('id', $ids)->get();

        $arr = [];
        foreach ($resultset as $row) {
            $arr[$row->assessmentgroupuser_to_id][$row->assessmentskill_id] = [
                'grade' => $row->score,
                'comment' => $row->comment
            ];
        }

        dd($arr);

        return $arr;

    }



    public function hasSubmitted()
    {
        return $this->givenscores() != null && $this->givenscores()->count() > 0;
    }

    public function url()
    {
        return route('assessment-docent-individual', [
            'assessment_id' => $this->assessmentgroup->assessment->id,
            'group_id' => $this->assessmentgroup->id,
            'user_id' => $this->id
        ]);
    }
}