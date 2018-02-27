<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 17/12/2017
 * Time: 16:30
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class WebsiteController extends Controller
{
    public function index()
    {
        return view("website.index");
    }

    public function about()
    {
        return view("website.about");
    }

    public function how()
    {
        return view("website.index");
    }

    public function cookies()
    {
        return view("website.cookies");
    }

    public function privacy()
    {
        return view("website.privacy");
    }
    public function copyright()
    {
        return view("website.copyright");
    }

}