<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.files.list', compact('files'))->with('panel_title', 'Files list');
    }

    public function create()
    {
        return view('admin.files.create')->with('panel_title', 'New File');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'file_title' => 'required',
                'fileItem' => 'required'
            ],
            [
                'file_title.required' => 'Please Enter The Title of File.',
                'fileItem.required' => 'Please Enter Your File.'

            ]);

        $new_file_data = [
            'file_title' => $request->input('file_title'),
            'file_description' => $request->input('file_description'),
            'file_type' => $request->file('fileItem')->getMimeType(),
            'file_size' => $request->file('fileItem')->getSize()

        ];

        $new_file_name = Str::random(45) . '.' . $request->file('fileItem')->getClientOriginalExtension();
        $result = $request->file('fileItem')->move(public_path('images'), $new_file_name);

        if ($result instanceof \Symfony\Component\HttpFoundation\File\File) {

            $new_file_data['file_name'] = $new_file_name;
            File::create($new_file_data);
            return redirect()->route('admin.files.list')->with('success', 'New file Creating Was Successfull.');
        }


    }

    public function edit()
    {

    }


    public function update()
    {

    }
}
