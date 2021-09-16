<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Brand;
use Image;
use Auth;

class BrandController extends Controller
{
    public function Brandview(){
      $brands = Brand::latest()->get();
      return view('Backend.brand.brandview',compact('brands'));
    }

    public function Brandstore(Request $request){
        $request ->validate([
           'name'=> 'required',
           'image'=> 'required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('img/brand/'.$name_gen);
        $save_url = 'img/brand/'.$name_gen;

        Brand::insert([
           'name' => $request->name,
           'image' =>$save_url,
        ]);

        $notification = array(
            'message'=> 'Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
       
    }

    public function EditBrand($id){
       $brand = Brand::findOrFail($id);
       return view('Backend.brand.brand_edit',compact('brand'));
    }

    public function UpdateBrand(Request $request){
        $brand_id = $request->id;
        $old_image = $request->old_image;

        if($request->file('image')){

            unlink($old_image);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('img/brand/'.$name_gen);
            $save_url = 'img/brand/'.$name_gen;
    
            Brand::findOrFail($brand_id)->update([
               'name' => $request->name,
               'image' =>$save_url,
            ]);
            $notification = array(
                'message'=> 'Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('all.brand')->with($notification);

        }else{
            Brand::findOrFail($brand_id)->update([
                'name' => $request->name,
                // 'image' =>$save_url,
             ]);
             $notification = array(
                 'message'=> 'Successfully',
                 'alert-type' => 'info'
             );
             return redirect()->route('all.brand')->with($notification);
        }

    }

    public function delete($id){
        Brand::find($id)->delete();
        return  redirect()->back()->with('success','Sucessfully Deleted');
    }



   public function AProfile(){
       $admin =Admin::find(1);
       return view('Backend.admin_profile',compact('admin'));
   } 
}



