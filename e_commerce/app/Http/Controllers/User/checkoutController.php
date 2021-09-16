<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class checkoutController extends Controller
{
    public function placeOrder(Request $request){
    //  dd($request->all());
    $data = array();
    $data['shipping_name'] = $request->shipping_name;
    $data['shipping_address'] = $request->shipping_address;
    $data['shipping_city'] = $request->shipping_city;
    $data['shipping_country'] = $request->shipping_country; 
    $data['shipping_email'] = $request->shipping_email; 
    $data['note'] = $request->note; 
    $data['Shipping_Method'] = $request->Shipping_Method;
    $data['Shipping_Charges'] = $request->Shipping_Charges;
    $cartTotal = Cart::total();

    if ($request->payment_method == 'Card' && $request->Shipping_Method=='Same Day Shipping') {
        return view('admin.frontend.paymentCard',compact('data','cartTotal'));
    }else{
        $cartTotal = Cart::total()+500;
        return view('admin.frontend.paymentCash',compact('data','cartTotal'));
    }

    }
}
