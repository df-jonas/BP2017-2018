<?php

namespace App;

use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $hidden = ["user_id", "courseid", "documenttypeid", "degreeid", "pubyearid", "fosid"];

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

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function downloads()
    {
        return Download::query()->where("file_id", "=", $this->id)->count();
    }

    public function average()
    {
        return round(Rating::query()->where("fileid", "=", $this->id)->avg("rating"));
    }

    public function humantimestamp()
    {
        return DateTimeHumanizer::difference(new \DateTime(), new \DateTime($this->created_at), "nl");
    }

    public function downloadUrl()
    {
        return route('sharing-download', ["public" => $this->public_id]);
    }

    public function detailUrl()
    {
        return route('sharing-detail', ['id' => $this->id]);
    }
}