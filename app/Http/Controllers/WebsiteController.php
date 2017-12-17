<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 17/12/2017
 * Time: 16:30
 */

namespace App\Http\Controllers;


class WebsiteController extends Controller
{
    public function index()
    {
        return view("website.index");
    }

    public function about()
    {
        return view("website.index");
    }

    public function how()
    {
        return view("website.index");
    }

    public function login()
    {
        return view("website.index");
    }

    public function cookies()
    {
        return view("website.index");
    }

    public function privacy()
    {
        return view("website.index");
    }
}