<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;
use App\Models\Order;

class ReportController extends Controller
{
    public function Reportview(){
        return view('Backend.Report');
    }

    public function ReportSearch(Request $request){
        // return $request->all();

        $date = new DateTime($request->date);
   	    $formatDate = $date->format('d F Y');
        // return $formatDate;

        $orders = Order::where('order_date',$formatDate)->latest()->get();
        return view('Backend.report_show',compact('orders'));
    }
  
}
