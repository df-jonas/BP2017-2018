<?php
/**
 * Created by PhpStorm.
 * User: Jonas
 * Date: 6/01/2018
 * Time: 13:50
 */

namespace App\Http\Controllers;


use App\File;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;

class StaticDataController extends Controller
{
    public function find($fileid)
    {
        $file = File::query()->where('public_id', '=', $fileid)->first();

        if ($file == null) {
            abort(404);
        }

        $prefix = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

        return response()->file($prefix . '/' . $file->filepath);
    }
}