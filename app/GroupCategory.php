<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 11/03/2018
 * Time: 14:32
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class GroupCategory extends Model
{
    protected $table = "groupcategories";

    public function groups()
    {
        return $this->hasMany('App\Group', 'category_id');
    }
}