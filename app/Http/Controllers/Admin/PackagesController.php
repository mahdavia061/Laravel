<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{


    public function index()
    {
        $packages = Package::all();
    return view('admin.packages.list',compact('packages'))->with('panel_title','Package list');
    }

    public function create()
    {
        return view('admin.packages.create')->with('panel_title','New Package');

    }

    public function store(Request $request)
    {


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

}
