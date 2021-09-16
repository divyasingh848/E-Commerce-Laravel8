<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImg;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
    public function Productadd(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('Backend.product.productview',compact('categories','brands'));
    }

    public function Productstore(Request $request){

        $image = $request->file('product_thumbnail');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(917,1000)->save('img/thumbnail/'.$name_gen);
        $save_url = 'img/thumbnail/'.$name_gen;


        $Product_id = Product::insertGetId([
              'brand_id' => $request->brand_id,
              'category_id' => $request->category_id,
              'product_name' => $request->product_name,
              'product_code' => $request->product_code,
              'product_qty' => $request->product_qty,
              'product_size' => $request->product_size,
              'product_color' => $request->product_color,
              'selling_price' => $request->selling_price,
              'product_desc' => $request->product_desc,
              'product_thumbnail' => $save_url,
              'featured' => $request->featured,
              'status' => 1,
              'created_at' =>Carbon::now(),
          ]);

          $images1 = $request->file('multi_imgs');
          foreach($images1 as $img){
            $name_gen1 = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(917,1000)->save('img/multi_img/'.$name_gen1);
            $save_url1 = 'img/thumbnail/'.$name_gen1;

           MultiImg::insert([
            'product_id' => $Product_id,
            'photo_name' => $save_url1,
            'created_at' =>Carbon::now(),
           ]);
           $notification = array(
            'message'=> 'Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('manage.product')->with($notification);
          }
    }

    public function Manageproduct(){
        $product1 = Product::latest()->get();
        return view('Backend.product.product_manage',compact('product1')); 
    }

    public function Editproduct($id){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $products = Product::findOrFail($id);
        return view('Backend.product.Product_edit',compact('categories','brands','products')); 
    }

   public function UpdateProduct(Request $request){
        
      $product_id = $request->id;

       Product::findOrFail($product_id)->update([
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'product_name' => $request->product_name,
        'product_code' => $request->product_code,
        'product_qty' => $request->product_qty,
        'product_size' => $request->product_size,
        'product_color' => $request->product_color,
        'selling_price' => $request->selling_price,
        'product_desc' => $request->product_desc,
        // 'product_thumbnail' => $save_url,
        'featured' => $request->featured,
        'status' => 1,
        'created_at' =>Carbon::now(),
    ]);
    $notification = array(
        'message'=> 'Successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('manage.product')->with($notification);

   } 

   public function delete($id){
    Product::find($id)->delete();
    return  redirect()->back()->with('success','Sucessfully Deleted');
}
}