<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function field()
    {
        return $this->belongsTo('App\Fos', 'fosid');
    }

    public function publicationyear()
    {
        return $this->belongsTo('App\PublicationYear', 'pubyearid');
    }

    public function doctype()
    {
        return $this->belongsTo('App\Doctype', 'documenttypeid');
    }

    public function degree()
    {
        return $this->belongsTo('App\Degree', 'degreeid');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'courseid');
    }
}