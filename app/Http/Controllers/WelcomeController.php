<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index(){
        //$products = Product::where('publication_status', 1)->orderBy('id', 'desc')->skip(2)->take(4)->get();
        $products = Product::where('publication_status', 1)->orderBy('id', 'desc')->take(4)->get();

        return view('front.home.home-content', ['products'=>$products]);

    }
    public function category(){
        return view('front.category.category-content');
    }


}
