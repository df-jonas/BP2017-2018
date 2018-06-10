<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 17/12/2017
 * Time: 16:30
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

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
        return view("website.how");
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

    public function terms()
    {
        return view("website.terms");
    }

    public function faq()
    {
        return view("website.FAQ");
    }

    public function demo()
    {
        return view("website.demo");
    }

    public function contact()
    {
        return view("website.contact");
    }

    public function sitemap()
    {
        return view("website.sitemap");
    }

    public function demoformpost(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $company = $request->company;
        $email = $request->email;
        $desc = $request->desc;
        $name = $firstname . ' ' . $lastname;

        Mail::send('mail.forms.demo', ['firstname' => $firstname, 'lastname' => $lastname, 'company' => $company, 'email' => $email, 'desc' => $desc], function ($message) use ($name, $email) {
            $message->replyTo($email, $name);
            $message->subject("Unihelp - demo aanvraag");
            $message->to('dt.unihelp@ehb.be');
        });

        Session::flash('message', 'Uw aanvraag werd verstuurd!');
        return Redirect::back();
    }

    public function contactformpost(Request $request)
    {
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $subject = $request->subject;
        $email = $request->email;
        $desc = $request->desc;

        $name = $firstname . ' ' . $lastname;

        Mail::send('mail.forms.contact', ['firstname' => $firstname, 'lastname' => $lastname, 'subject' => $subject, 'email' => $email, 'desc' => $desc], function ($message) use ($name, $email) {
            $message->replyTo($email, $name);
            $message->subject("Unihelp - Contact aanvraag");
            $message->to('dt.unihelp@ehb.be');
        });

        Session::flash('message', 'Uw aanvraag werd verstuurd!');
        return Redirect::back();
    }

}