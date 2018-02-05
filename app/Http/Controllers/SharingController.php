<?php

namespace App\Http\Controllers;

use App\Campus;
use App\Course;
use App\Degree;
use App\Doctype;
use App\File;
use App\Fos;
use App\Helpers\RandomHelper;
use App\PublicationYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SharingController extends Controller
{
    public function index(Request $request)
    {
        $arr = [
            'foses' => Fos::query()->orderBy("name")->get(),
            'courses' => Course::query()->orderBy('name')->get(),
            'pubyears' =>PublicationYear::query()->orderBy('name')->get(),
            'userfiles' => File::query()->where("user_id", "=", Auth::user()->id)->orderBy('id', 'desc')->take(5)->get(),
            'files' => File::query()->with('degree')->with('field')->orderBy('id', 'desc')->get()
        ];

        return view("platform.sharing.index", $arr);
    }

    public function detail()
    {
        return view("platform.sharing.detail");
    }

    public function newfile()
    {
        $arr = [
            'campus' => Auth::user()->campus->name,
            'fos' => Auth::user()->field->name,
            'courses' => Course::query()->orderBy("name")->get(),
            'doctypes' => Doctype::query()->orderBy("name")->get(),
            'degrees' => Degree::query()->orderBy("name")->get(),
            'pubyears' => PublicationYear::query()->orderBy("name")->get(),
        ];

        return view("platform.sharing.new", $arr);
    }

    public function newfilePost(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:10240'
        ]);

        $publicResourceId = strtolower(RandomHelper::getRandomPublicId());
        $fileuploadExtention = $request->file('file')->getClientOriginalExtension();
        $originalname = $request->file('file')->getClientOriginalName();
        $filename = $publicResourceId . '.' . $fileuploadExtention;

        $path = Storage::putFileAs('uploads', $request->file('file'), $filename);

        $file = new File();
        $file->public_id = $publicResourceId;
        $file->originalname = $originalname;
        $file->filename = $filename;
        $file->filepath = $path;
        $file->user_id = Auth::user()->id;
        $file->title = $request->title;
        $file->fosid = Auth::user()->fosid;
        $file->courseid = $request->course;
        $file->documenttypeid = $request->documenttype;
        $file->degreeid = $request->degree;
        $file->pubyearid = $request->originaldate;
        $file->hasBook = $request->hasbook;
        $file->booktitle = $request->booktitle;
        $file->filedescription = $request->filedescription;
        $file->save();

        return Redirect::to(route('sharing-index'));
    }
}
