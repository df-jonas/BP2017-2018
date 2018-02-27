<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'api_token', 'image', 'campusid', 'fosid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'role', 'canvas_key', 'created_at', 'updated_at',
    ];

    public function files()
    {
        return $this->hasMany('App\File');
    }

    public function field() {
        return $this->belongsTo('App\Fos', 'fosid');
    }

    public function campus() {
        return $this->belongsTo('App\Campus', 'campusid');
    }

    public function isValid()
    {
        if (
            !empty($this->id) &&
            !empty($this->username) &&
            !empty($this->name) &&
            !empty($this->email) &&
            !empty($this->campusid) &&
            !empty($this->fosid) &&
            !empty($this->role) &&
            !empty($this->canvas_key) &&
            !empty($this->canvas_refresh) &&
            !empty($this->canvas_id)
        ) {
            return true;
        }
        return false;
    }
}
