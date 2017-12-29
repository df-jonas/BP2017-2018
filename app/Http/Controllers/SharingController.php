<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function sharingIndex()
    {
        return view("platform.sharing.index");
    }


    public function sharingDetail()
    {
        return view("platform.sharing.detail");
    }


    public function sharingNew()
    {
        return view("platform.sharing.new");
    }
}
