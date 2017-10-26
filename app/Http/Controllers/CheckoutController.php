<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Shipping;
use Illuminate\Http\Request;
use Session;

class CheckoutController extends Controller
{
   public function index(){

       return view('/front.checkout.checkout-content');
   }

   public function saveCusterInfo(Request $request){
       $this->validate($request,[
           'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
           'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
           'email'=>'required|email|unique:customers,email',
           'password'=>'required|max:10|min:6',
           'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
           'address'=>'required'
       ]);
       $customer = new Customer();
       $customer->first_name = $request->first_name;
       $customer->last_name = $request->last_name;
       $customer->email = $request->email;
       $customer->password = bcrypt($request->password);
       $customer->phone_number = $request->phone_number;
       $customer->address = $request->address;
       $customer->save();

       $customerId = $customer->id;
       Session::put('customerId', $customerId);
       Session::put('customerName', $request->first_name.' '.$request->last_name);

       return redirect('/shipping-info');
   }

    public function customerLogin(Request $request){
        $customer = Customer::where('email', $request->email)->first();

        if($customer){
            if (password_verify($request->password, $customer->password)){
                Session::put('customerId', $customer->id);
                Session::put('customerName', $request->first_name.' '.$request->last_name);
                return redirect('shipping-info');
            }else{
                return redirect('/checkout')->with('message', 'Invalid Email or Password !');
            }
        }else{
            return redirect('/checkout')->with('message', 'Invalid Email Address !');
        }
    }

    public function showShippingInfo(){
        $customerId = Session::get('customerId');
        $customer = Customer::find($customerId);
        return view('front.checkout.shipping-info',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
        $this->validate($request,[
            'full_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:shippings,email',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required'
        ]);
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();

        $shippingId = $shipping->id;
        Session::put('customerId', $shippingId);
        return redirect('/payment-info');
    }

    public function showPaymentInfo(){

        return view('front.checkout.payment-content');
    }

    public function saveOrderInfo(Request $request){
        return $request->all();
    }


}
