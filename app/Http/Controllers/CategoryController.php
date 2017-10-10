<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function saveCategoryInfo(Request $request ){
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();

        return redirect('/add-category')->with('message', 'Category Info Save Successfylly');
    }

    public function manageCategory(){
        return view('admin.category.manage-category');
    }
    public function editCategory(){
        return view('admin.category.edit-category');
    }
}
