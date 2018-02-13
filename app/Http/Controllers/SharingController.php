<?php

namespace App\Http\Controllers;

use App\Campus;
use App\Course;
use App\Degree;
use App\Doctype;
use App\Download;
use App\File;
use App\Fos;
use App\Helpers\RandomHelper;
use App\PublicationYear;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SharingController extends Controller
{
    public function index()
    {
        $arr = [
            'foses' => Fos::query()->orderBy("name")->get(),
            'courses' => Course::query()->orderBy('name')->get(),
            'pubyears' => PublicationYear::query()->orderBy('name')->get(),
            'userfiles' => File::query()->where("user_id", "=", Auth::user()->id)->orderBy('id', 'desc')->take(5)->get(),
            'files' => File::query()->with('degree')->with('field')->orderBy('id', 'desc')->get()
        ];

        return view("platform.sharing.index", $arr);
    }

    public function detail($id)
    {
        $arr = [
            'file' => File::query()->where("id", "=", $id)->first(),
            'userdownloads' => Download::query()->where("user_id", "=", Auth::user()->id)->get(),
            'userrating' => Rating::query()->where("fileid", "=", $id)->where("userid", "=", Auth::id())->first()
        ];
        return view("platform.sharing.detail", $arr);
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

    public function ajaxFilter(Request $request)
    {
        $q = File::query();

        if ($request->search != "") {
            $q->where("title", "LIKE", "%" . $request->search . "%");
        }

        if ($request->fos != -1) {
            $q->where("fosid", "=", $request->fos);
        }

        if ($request->course != -1) {
            $q->where("courseid", "=", $request->course);
        }

        if (!empty($request->pubyear) && sizeof($request->pubyear) > 0) {
            $q->whereIn("pubyearid", $request->pubyear);
        }

        return $q->select(["id", "title", "public_id", "user_id", "courseid", "documenttypeid", "degreeid", "pubyearid", "fosid"])->with([
            'field' => function ($query) {
                $query->select("id", "name");
            },
            'degree' => function ($query) {
                $query->select("id", "name");
            },
            'course' => function ($query) {
                $query->select("id", "name");
            },
            'user' => function ($query) {
                $query->select("id", "name");
            }
        ])->orderBy('id', 'desc')->get();
    }

    public function ajaxRate(Request $request)
    {
        $fileid = $request->fileid;
        $rating = $request->rating;
        $userid = Auth::user()->id;

        $r = Rating::query()->where("fileid", "=", $fileid)->where("userid", "=", $userid)->first();

        if ($r == null) {
            $r = new Rating();
            $r->userid = $userid;
            $r->fileid = $fileid;
            $r->rating = $rating;
            $r->save();
        } else {
            $r->rating = $rating;
            $r->save();
        }

        return $r;
    }

    public function downloadproxy($public)
    {
        $file_id = File::query()->where("public_id", "=", $public)->first()->id;
        $user_id = Auth::id();

        $dbdl = Download::query()
            ->where("user_id", "=", $user_id)
            ->where("file_id", "=", $file_id)
            ->first();

        if ($dbdl == null) {
            $dl = new Download();
            $dl->file_id = $file_id;
            $dl->user_id = $user_id;
            $dl->save();
        }

        return Redirect::to(env("FILE_DOMAIN", "") . $public);
    }
}
