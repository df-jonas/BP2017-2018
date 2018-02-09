<?php

namespace App;

use Coduo\PHPHumanizer\DateTimeHumanizer;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = 'downloads';

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function file()
    {
        return $this->belongsTo('App\File', 'file_id');
    }

    public function humantimestamp() {
        return DateTimeHumanizer::difference(new \DateTime(), new \DateTime($this->updated_at), "nl");
    }
}