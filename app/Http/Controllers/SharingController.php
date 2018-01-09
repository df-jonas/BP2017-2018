<?php

namespace App\Http\Controllers;

use App\File;
use App\Helpers\RandomHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function newFile(Request $request)
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
        $file->save();

        return "<a href='https://static-unihelp.eu/$publicResourceId'>https://static-unihelp.eu/$publicResourceId</a>";
    }
}
