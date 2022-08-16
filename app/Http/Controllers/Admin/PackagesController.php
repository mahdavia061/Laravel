<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Package;
use Illuminate\Http\Request;

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

    public function syncfiles()
    {
        $files = File::all();
        return view('admin.packages.files',compact('files'))->with('panel_title','Select Package\'s files');
    }

    public function updatesyncfiles()
    {

    }

}
