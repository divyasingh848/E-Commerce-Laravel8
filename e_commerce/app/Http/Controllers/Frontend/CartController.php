<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function AddToCart(Request $request,$id){
       $product = Product::findOrFail($id);

       Cart::add(['id' => $id,
                  'name' => $request->product_name,
                   'qty' => $request->qty,
                   'price' => $product->selling_price,
                   'weight' => 1, 
                   'options' => [
                       'image' => $request->product_thumbnail,
                       'color' => $request->color,
                       'size' =>  $request->size,
                   ]]);

        return response()->json(['success'=> 'Sucessfully inserted in cart']);               
    }

    //Mini cart section
    public function AddMinicart(){
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal= Cart::total();

        return response()->json(array(
            'carts'=> $carts,
            'cartQty' => $cartQty,
            'cartTotal'=>$cartTotal,
        ));
    }

    public function RemoveMiniCart($rowId){
        Cart::remove($rowId);
        return response()->json(['success'=>'Product remove from Cart']);
    }

   
}
