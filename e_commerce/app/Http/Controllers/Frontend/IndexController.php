<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function ULogout(){
       Auth::logout();
       return redirect()->route('login');
       }

   public function UProfile(){
       $id=Auth::user()->id;
       $user= User::find($id);
       return view('admin.frontend.userprofile',compact('user'));
   }

   public function UProfileUpdate(Request $request){
       $data = User::find(Auth::user()->id);
       $data->name = $request->name;
       $data->email = $request->email;

       $data->save();

       $notification = array(
           'message' => 'User Profile Updated',
           'alert-type' => 'success'
       );
       return redirect()->route('dashboard')->with($notification);
   }

   public function URecentOrder(){
       $orders =Order::where('user_id',Auth::id())->orderBy('id','DESC')->get();
       return view('admin.frontend.recentorders',compact('orders'));
   }

//   public function OrderDetails($order_id){
//      $order 
//     return view('admin.frontend.recentOrder_view',compact('carts'));
//   } 


    public function index(){
        $product = Product::where('status',1)->limit(3)->get();
        $product1 = Product::orderBy('product_name','DESC')->limit(3)->get();
        $product1a = Product::where('featured',1)->limit(3)->get();
        $product1b = Product::orderBy('product_name','ASC')->limit(8)->get();
        return view('admin.frontend.index',compact('product','product1','product1a','product1b'));
    }

    public function ProductDetails($id){
        $product2 = Product::findOrFail($id);
        $product3 = Product::orderBy('product_name','ASC')->limit(3)->get();
        $product1b = Product::where('id',$id)->get();
        // $product1bb= explode(',',$product1b);
        $multi_img1 =MultiImg::where('product_id',$id)->get();
                                     //prouduct_id should match with requested id $id   
        return view('admin.frontend.productdetail',compact('product2','multi_img1','product1b','product3'));

    }

    public function ProductCatalog(){
        $category1 = Category::orderBy('Id','ASC')->get();
        $brand1 = Brand::orderBy('Id','ASC')->limit(6)->get();
        $product1b = Product::orderBy('Id','ASC')->limit(3)->get();
        return view('admin.frontend.catalog',compact('product1b','brand1','category1'));
    }

    //product view (modal view)
    public function ProductviewA($id){
        $product1= Product::findOrFail($id);

        $color = $product1->product_color;
        $pcolor = explode(',',$color);

        $size = $product1->product_size;
        $psize = explode(',',$size);

        $qty = $product1->product_qty;
        $pqty = explode(',',$qty);

        return response()->json(array(
           'product' => $product1,
           'color' => $pcolor,
           'size' => $psize,
           'qty' => $pqty,
        ));
    }
}
