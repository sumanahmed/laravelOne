<?php

namespace App\Http\Controllers;
use App\Category;
use App\Brand;
use App\Product;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $catgories = Category::where('publication_status', 1)->get();
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.product.add-product', [
            'catgories' => $catgories,
            'brands' => $brands
        ]);
    }

    public function saveProductInfo(Request $request){
        /*without package image upload
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $productImage->move($directory, $imageName);
        $imgUrl = $directory.$imageName;*/

        /*image upload using intervention*/
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product-images/';
        $imgUrl = $directory.$imageName;
        Image::make($productImage)->resize(200, 200)->save($imgUrl);


        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imgUrl;
        $product->publication_status = $request->publication_status;

        $product->save();
        return redirect('add-product')->with('message', 'Product Info Save Successfully');


    }

    public function manageProductInfo(){
        //$products = Product::all();
        $products = DB::table('products')
                       ->join('categories', 'products.category_id', '=', 'categories.id')
                       ->join('brands', 'products.brand_id', '=', 'brands.id')
                       ->select('products.*', 'categories.category_name', 'brands.brand_name')
                       ->get();
        return view('admin.product.manage-product', ['products' => $products]);
    }

    public function viewProductInfo($id){
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*', 'categories.category_name', 'brands.brand_name')
            ->where('products.id', $id)
            ->first();
        return view('admin.product.view-product', ['product'=>$product]);
    }





}
