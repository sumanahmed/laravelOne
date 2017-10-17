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

    public function manageBrandInfo(Request $request){
        $allBrands = Brand::all();
        return view('admin.brand.manage-brand', ['allBrands'=>$allBrands]);
    }


    public function unpublishedBrandInfo($id){
        $brandyById = Brand::find($id);
        $brandyById->publication_status = 0;
        $brandyById->save();
        return redirect('manage-brand')->with('message', 'Brand info Unpublished successfully');
    }

    public function publishedBrandInfo($id){
        $brandyById = Brand::find($id);
        $brandyById->publication_status = 1;
        $brandyById->save();
        return redirect('manage-brand')->with('message', 'Brand info Published successfylly');
    }

    public function editBrandInfo($id){
        //$categoryById = Category::where('id',$id)->first();
        $brandById = Brand::find($id);
        //return $categoryById;
        return view('admin.brand.edit-brand', ['brandById'=>$brandById]);
    }

    public function updateBrandInfo(Request $request){
        $brandyById = Brand::find($request->brand_id);
        $brandyById->brand_name  = $request->brand_name;
        $brandyById->brand_description  = $request->brand_description;
        $brandyById->publication_status  = $request->publication_status;

        $brandyById->save();
        return redirect('/manage-brand')->with('message', 'Brand info updated Successfully');
    }

    public function deleteBrandInfo($id){
        $brandyById = Brand::find($id);
        $brandyById->delete();
        return redirect('/manage-brand')->with('message', 'Brand info deleted successfully');
    }
}
