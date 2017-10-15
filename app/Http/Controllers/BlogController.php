<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog(){
        return view('admin.blog.add-blog');
    }

    public function saveBlogInfo(){

    }
    public function manageBlog(){
        return view('admin.blog.manage-blog');
    }
    public function editBlog(){
        return view('admin.blog.edit-blog');
    }
}
