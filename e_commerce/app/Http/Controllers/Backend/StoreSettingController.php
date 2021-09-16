<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreSetting;

class StoreSettingController extends Controller
{
    public function StoreSetting(){
        $storesetting =StoreSetting::latest()->get();
        return view('Backend.storesetting',compact('storesetting'));
    }

   public function AddSetting(Request $request){
     
    StoreSetting::insert([
        'Title_Name' => $request->Title_Name,
     ]);

     $notification = array(
        'message'=> 'Successfully',
        'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);
   } 

  public function EditSetting($id){
    $storesetting = StoreSetting::findOrFail($id);
    return view('Backend.storesetting_edit',compact('storesetting'));
  }

  public function UpdateSetting(Request $request){
    $storesetting = $request->id;

    StoreSetting::findOrFail($storesetting)->update([
      'Title_Name' => $request->Title_Name,
     
   ]);
   $notification = array(
       'message'=> 'Successfully',
       'alert-type' => 'info'
   );
   return redirect()->route('store.setting')->with($notification);
    
  }

  public function delete($id){
    StoreSetting::find($id)->delete();
    return  redirect()->back()->with('success','Sucessfully Deleted');

  }
}
