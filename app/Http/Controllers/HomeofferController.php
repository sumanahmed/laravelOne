<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Homeoffer;

class HomeofferController extends Controller
{
    public function addHomeOffer(){
        return view('admin.homeoffer.add-offer');
    }
    public function saveHomeOffer(Request $request){
        $bigImage = $request->file('big_image');
        $bigImageName = $bigImage->getClientOriginalName();
        $directory ='home-image/';
        $bigImageUrl = $directory.$bigImageName;
        Image::make($bigImage)->resize(590,640)->save($bigImageUrl);

        $smallImage = $request->file('small_image');
        $smallImageName = $smallImage->getClientOriginalName();
        $smallImageUrl = $directory.$smallImageName;
        Image::make($smallImage)->resize(640,350)->save($smallImageUrl);

        $leftImage = $request->file('left_image');
        $leftImageName = $leftImage->getClientOriginalName();
        $leftImageUrl = $directory.$leftImageName;
        Image::make($leftImage)->resize(350,350)->save($leftImageUrl);

        $rightImage = $request->file('right_image');
        $rightImageName = $rightImage->getClientOriginalName();
        $rightImageUrl = $directory.$rightImageName;
        Image::make($rightImage)->resize(350,350)->save($rightImageUrl);

        $homeInfo = new Homeoffer();
        $homeInfo->big_img_caption = $request->big_img_caption;
        $homeInfo->offer = $request->offer;
        $homeInfo->big_image = $bigImageUrl;
        $homeInfo->small_img_caption = $request->small_img_caption;
        $homeInfo->small_image = $smallImageUrl;
        $homeInfo->left_img_caption = $request->left_img_caption;
        $homeInfo->left_image = $leftImageUrl;
        $homeInfo->right_img_caption = $request->right_img_caption;
        $homeInfo->right_image = $rightImageUrl;
        $homeInfo->save();
        return redirect('/add-offer')->with('message','Information save successfully');
    }

    public function manageHomeOffer(){
        $getHomeOffer = Homeoffer::all();
        return view('admin.homeoffer.manage-offer',['getHomeOffer'=>$getHomeOffer]);
    }

    public function viewHomeOffer($id){
        $getHomeOfferById = Homeoffer::find($id);
        return view('admin.homeoffer.view-offer', [ 'getHomeOfferById' => $getHomeOfferById]);

    }

    public function editHomeOffer($id){
        $getHomeOfferById = Homeoffer::find($id);
        return view('admin.homeoffer.edit-offer', [ 'getHomeOfferById' => $getHomeOfferById]);

    }

    public function updateHomeOffer(Request $request){
        $bigImage = $request->file('big_image');
        $smallImage = $request->file('small_image');
        $leftImage = $request->file('left_image');
        $rightImage = $request->file('right_image');

        if($bigImage && $smallImage && $leftImage && $rightImage){
            $homeInfo = Homeoffer::find($request->home_id);
            unlink($homeInfo->big_image );
            unlink( $homeInfo->small_image);
            unlink( $homeInfo->left_image);
            unlink( $homeInfo->right_image);

            $bigImage = $request->file('big_image');
            $bigImageName = $bigImage->getClientOriginalName();
            $directory ='home-image/';
            $bigImageUrl = $directory.$bigImageName;
            Image::make($bigImage)->resize(590,640)->save($bigImageUrl);

            $smallImage = $request->file('small_image');
            $smallImageName = $smallImage->getClientOriginalName();
            $smallImageUrl = $directory.$smallImageName;
            Image::make($smallImage)->resize(640,350)->save($smallImageUrl);

            $leftImage = $request->file('left_image');
            $leftImageName = $leftImage->getClientOriginalName();
            $leftImageUrl = $directory.$leftImageName;
            Image::make($leftImage)->resize(350,350)->save($leftImageUrl);

            $rightImage = $request->file('right_image');
            $rightImageName = $rightImage->getClientOriginalName();
            $rightImageUrl = $directory.$rightImageName;
            Image::make($rightImage)->resize(350,350)->save($rightImageUrl);

            $homeInfo->big_img_caption = $request->big_img_caption;
            $homeInfo->offer = $request->offer;
            $homeInfo->big_image = $bigImageUrl;
            $homeInfo->small_img_caption = $request->small_img_caption;
            $homeInfo->small_image = $smallImageUrl;
            $homeInfo->left_img_caption = $request->left_img_caption;
            $homeInfo->left_image = $leftImageUrl;
            $homeInfo->right_img_caption = $request->right_img_caption;
            $homeInfo->right_image = $rightImageUrl;
            $homeInfo->save();

        }else{
            $homeInfo = Homeoffer::find($request->home_id);
            $homeInfo->big_img_caption = $request->big_img_caption;
            $homeInfo->offer = $request->offer;
            $homeInfo->small_img_caption = $request->small_img_caption;
            $homeInfo->left_img_caption = $request->left_img_caption;
            $homeInfo->right_img_caption = $request->right_img_caption;
            $homeInfo->save();

        }
        return redirect('/manage-offer')->with('message','Information Update successfully');
    }
    public function deleteHomeOffer($id){
        $homeById = Homeoffer::find($id);
        unlink($homeById->big_image );
        unlink( $homeById->small_image);
        unlink( $homeById->left_image);
        unlink( $homeById->right_image);
        $homeById->delete();
        return redirect('/manage-offer')->with('message','Information Delete successfully');
    }
}
