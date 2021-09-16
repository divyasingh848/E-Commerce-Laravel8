<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Auth;

class WishlistController extends Controller
{
   public function Wishlist(){
     

       return view('admin.frontend.wishlist');
   }

   public function WishlistGet(){
       $wishlist = Wishlist::with('product')->where('user_id',Auth::id())->latest()->get();
       return response()->json($wishlist);
   }

   public function RemoveWishlist($id){
       Wishlist::where('user_id',Auth::id())->where('id',$id)->delete();
       return response()->json(['success'=>'Product Removed from Wishlist']);
   }
}
