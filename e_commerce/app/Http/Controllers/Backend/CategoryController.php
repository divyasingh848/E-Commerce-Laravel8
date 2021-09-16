<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function Categoryview(){
        $category = Category::latest()->get();
        return view('Backend.category.categoryview',compact('category'));
      }

    public function categorystore(Request $request){
      $request ->validate([
        'category_name'=> 'required',
     ]);

     Category::insert([
        'category_name' => $request->category_name,
     ]);

     $notification = array(
         'message'=> 'Successfully',
         'alert-type' => 'success'
     );
     return redirect()->back()->with($notification);
    
    }  

    public function EditCategory($id){
      $category = Category::findOrFail($id);
      return view('Backend.category.category_edit',compact('category'));
    }
    
    public function UpdateCategory(Request $request){
      $category_id = $request->id;

      Category::findOrFail($category_id)->update([
        'category_name' => $request->category_name,
       
     ]);
     $notification = array(
         'message'=> 'Successfully',
         'alert-type' => 'info'
     );
     return redirect()->route('all.category')->with($notification);
      
    }

    public function delete($id){
      Category::find($id)->delete();
      return  redirect()->back()->with('success','Sucessfully Deleted');
  }
}