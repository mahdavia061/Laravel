<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
    return view('admin.files.list',compact('files'))->with('panel_title','Files list');
    }

    public function create()
    {
    return view('admin.files.create')->with('panel_title','New File');
    }
}
