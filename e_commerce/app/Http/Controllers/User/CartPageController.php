<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;


class CartPageController extends Controller
{
   public function myOrders(){
       return view('admin.frontend.mycart');
   }
        
   public function getCartProduct(){
    $carts = Cart::content();
    $cartQty = Cart::count();
    $cartTotal= Cart::total();

    return response()->json(array(
        'carts'=> $carts,
        'cartQty' => $cartQty,
        'cartTotal'=>$cartTotal,
    ));
   }

   public function RemoveCartProduct($rowId){
       Cart::remove($rowId);

       return response()->json(['success'=>'Product remove from Cart']);
   }
    
   public function checkoutCall(){
    $total= Cart::total();

    return response()->json(array(
        'total'=>$total,
    ));
   }

   //cart checkout
   public function Checkout(){
    if (Auth::check()) {
        if (Cart::total() > 0) {

    $carts = Cart::content();
    $cartQty = Cart::count();
    $cartTotal = Cart::total();


    return view('admin.frontend.checkout',compact('carts','cartQty','cartTotal'));

        }else{

        $notification = array(
        'message' => 'Shop atleast One Product',
        'alert-type' => 'error'
    );

    return redirect()->to('/')->with($notification);

        }


    }else{

         $notification = array(
        'message' => 'Login First',
        'alert-type' => 'error'
    );

    return redirect()->route('login')->with($notification);

    }

} // end method 

   }


