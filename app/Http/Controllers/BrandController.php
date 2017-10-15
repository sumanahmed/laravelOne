<?php

namespace App\Http\Controllers;

use App\Brand;
use DB;
use Illuminate\Http\Request;

class Brandcontroller extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }

    public function saveBrandInfo(Request $request){

        $this->validate($request, [
            'brand_name' => 'required|alpha|min:2|max:20',
            'brand_description' => 'required',
        ]);

        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('add-brand')->with('message', 'Brand Added Successfully');



    }

    public function manageBrandInfo(){
        $allBrands = Brand::all();
        return view('admin.brand.manage-brand', ['allBrands'=>$allBrands]);
    }
}
