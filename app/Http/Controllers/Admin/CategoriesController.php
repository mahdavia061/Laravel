<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.list', compact('categories'))->with('panel_title', 'Categories List');
    }

    public function create()
    {
        return view('admin.categories.create')->with('panel_title', 'New Category');
    }

    public function store(Request $request)
    {
        //validation

        $new_category = Category::create([
            'category_name' => $request->input('category_name')
        ]);

        if ($new_category) {
            return redirect()->route('admin.categories.list')->with('success', 'New Category creating was successful.');
        }
    }

    public function edit(Request $request,$category_id)
    {
        $categoryItem = Category::find($category_id);
        return view('admin.categories.edit',compact('categoryItem'))->with('panel_title','Edit Category');
    }

    public function update(Request $request, $category_id)
    {
        $categoryItem = Category::find($category_id);
        $updateResult= $categoryItem->update([
            'category_name' => $request->input('category_name')
        ]);

        if ($updateResult){

            return redirect()->route('admin.categories.list')->with('success', 'Category Editing was successfully.');

        }
    }

    public function delete(Request $request,$category_id)
    {
    Category::destroy([$category_id]);

        return redirect()->route('admin.categories.list')->with('success', 'Category Deleted successfully.');

    }
}
