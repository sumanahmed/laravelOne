<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request){
        $product = Product::find($request->product_id);
        Cart::add([
           'id' => $product->product_id,
           'name' => $product->product_name,
           'price' => $product->product_price,
           'qty' => $product->qty
        ]);

        return redirect('/show-cart');
    }

    public function showCart(){
        $productscart = Cart::content();
        return $productscart;
        return view('front.cart.show-cart');
    }
}
