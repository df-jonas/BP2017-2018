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
        'first_name', 'last_name', 'birthdate', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'role', 'canvas_key', 'created_at', 'updated_at',
    ];

    public function hasCanvasAuth()
    {
        if (isset($this->canvas_key) && $this->canvas_key !== null && $this->canvas_key !== "") {
            return true;
        }
        return false;
    }

    public function getCanvasAuth()
    {
        if (!$this->hasCanvasAuth()) {
            return false;
        } else {
            return array(
                "canvas_key" => $this->canvas_key,
                "canvas_refresh" => $this->canvas_refresh,
            );
        }
    }
}
