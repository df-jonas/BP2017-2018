<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharingController extends Controller
{
    public function sharingIndex()
    {
        return view("platform.sharing.test");
    }
}
