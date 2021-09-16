<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
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

    public function AddToWishlist(Request $request,$product_id){
        
        if(Auth::check()){

        $exist = Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->first();
                 
            if(!$exist){
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);
           return response()->json(['success'=>'Successfully added into wishlist']);
            }else{
                return response()->json(['error'=>'Product Already exist in wishlist']);
            } 
      
        }else{
            return response()->json(['error'=>'Login first']);
        }
    }
}
