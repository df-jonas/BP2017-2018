<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index()
    {
        return view('platform.assessment.index');
    }

    public function detail()
    {
        return view('platform.assessment.detail');
    }
    public function new()
    {
        return view('platform.assessment.new');
    }
    public function docentIndex()
    {
        return view('platform.assessment.docent.index');
    }

    public function docentNew()
    {
        return view('platform.assessment.docent.new');
    }
    public function docenAssessment()
    {
        return view('platform.assessment.docent.assessment');
    }
    public function docentGroup()
    {
        return view('platform.assessment.docent.group');
    }
    public function docentIndividual()
    {
        return view('platform.assessment.docent.individual');
    }
}
