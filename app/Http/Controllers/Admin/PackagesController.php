<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $categories = Category::all();
        return view('admin.packages.create', compact('categories'))->with('panel_title', 'New Package');

    }

    public function store(Request $request)
    {

        //validations

        $new_package = Package::create([
            'package_title' => $request->input('package_title'),
            'package_price' => $request->input('package_price')
        ]);
        if ($new_package) {
            if ($request->has('categories')) {
                $new_package->categories()->sync($request->input('categories'));
            }
            return redirect()->route('admin.packages.list')->with('success', 'New Package create successfull.');
        }

    }

    public function edit(Request $request, $package_id)
    {

        $package_Item = Package::find($package_id);
        $categories = Category::all();
        $package_categories = $package_Item->categories()->get()->pluck('category_id')->toArray();
        return view('admin.packages.edit', compact('package_Item', 'categories', 'package_categories'));
    }


    public function update(Request $request, $package_id)
    {
        $package_Item = Package::find($package_id);
        if ($package_Item) {
            $package_Item->update([
                'package_title' => $request->input('package_title'),
                'package_price' => $request->input('package_price')
            ]);
            if ($request->has('categories')){
                $package_Item->categories()->sync($request->input('categories'));

            }
            return redirect()->route('admin.packages.list')->with('success', 'Package Editing was successfull.');


        }
    }

    public function delete()
    {

    }

    public function syncfiles(Request $request, $package_id)
    {
        $files = File::all();
        $package_Item = Package::find($package_id);
        $package_files = $package_Item->files()->get()->pluck('file_id')->toArray();
//        $files_ids = [];
//        foreach ($package_files as $file){
//            $files_ids[] = $file->file_id;
//        }
        return view('admin.packages.files', compact('files', 'package_files'))->with('panel_title', 'Select Package\'s files');
    }

    public function updatesyncfiles(Request $request, $package_id)
    {
        $package_Item = Package::find($package_id);
        $files = $request->input('files');
        if ($package_Item && is_array($files)) {
//        $package_Item->files()->attach($files);
            $package_Item->files()->sync($files);
            return redirect()->route('admin.packages.list')->with('success', 'files selected successfully.');
        }
    }

}
