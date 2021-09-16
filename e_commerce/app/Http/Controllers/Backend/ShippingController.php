<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function Shipping(){
        $shipping = Shipping::get();
        return view('Backend.Shipping_view',compact('shipping'));
    }

    public function AddShipping(Request $request){
        Shipping::insert([
            'Shipping_Method' => $request->Shipping_Method,
            'Shipping_Charges' => $request->Shipping_Charges,
         ]);
    
         $notification = array(
             'message'=> 'Successfully',
             'alert-type' => 'success'
         );
         return redirect()->back()->with($notification);
    }
}
