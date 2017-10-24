<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
   public function index(){

       return view('/front.checkout.checkout-content');
   }

   public function saveCustomerInfo(Request $request){
        $this->validate($request,[
            'first_time' => 'required|alpha',
            'last_time' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_number' => 'required',
        ]);


   }
}
