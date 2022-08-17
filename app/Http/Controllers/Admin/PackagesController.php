<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PackagesController extends Controller
{


    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.list', compact('packages'))->with('panel_title', 'Package list');
    }

    public function create()
    {
        return view('admin.packages.create')->with('panel_title', 'New Package');

    }

    public function store(Request $request)
    {

        //validations

        $new_package = Package::create([
            'package_title' => $request->input('package_title'),
            'package_price' => $request->input('package_price')
        ]);
        if ($new_package) {
            return redirect()->route('admin.packages.list')->with('success', 'New Package create successfull.');
        }

    }

    public function edit()
    {

    }


    public function update()
    {

    }

    public function delete()
    {

    }

    public function syncfiles(Request $request,$package_id )
    {
        $files = File::all();
        $package_Item = Package::find($package_id);
        $package_files = $package_Item->files()->get()->pluck('file_id')->toArray();
//        $files_ids = [];
//        foreach ($package_files as $file){
//            $files_ids[] = $file->file_id;
//        }
        return view('admin.packages.files',compact('files','package_files'))->with('panel_title','Select Package\'s files');
    }

    public function updatesyncfiles(Request $request,$package_id)
    {
    $package_Item = Package::find($package_id);
    $files = $request->input('files');
    if ($package_Item && is_array($files)){
//        $package_Item->files()->attach($files);
        $package_Item->files()->sync($files);
        return redirect()->route('admin.packages.list')->with('success','files selected successfully.');
    }
    }

}
