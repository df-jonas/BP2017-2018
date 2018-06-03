<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutee extends Model
{
    protected $table = 'tutees';

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function course()
    {
        return $this->hasOne('App\Course', 'id', 'course_id');
    }

    public function needs()
    {
        return [
            [
                "string" => "Oefeningen",
                "value" => $this->need_exercises
            ],
            [
                "string" => "Uitleg",
                "value" => $this->need_explanation
            ],
            [
                "string" => "Studeren",
                "value" => $this->need_studying
            ]
        ];
    }

    public function needsStr()
    {
        $first = true;
        $str = "";

        foreach ($this->needs() as $need) {
            if ($need['value'] == true) {
                if (!$first) {
                    $str .= ", ";
                } else {
                    $first = false;
                }
                $str .= $need['string'];
            }
        }

        return $str;
    }
}