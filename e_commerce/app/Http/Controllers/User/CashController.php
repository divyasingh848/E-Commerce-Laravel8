<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Auth;
use Carbon\Carbon;

class CashController extends Controller
{
    public function cashPayment(Request $request){

        $total_amount = round(Cart::total());
  
  $order_id = Order::insertGetId([
    'user_id' => Auth::id(),
    'shipping_name' => $request->shipping_name,
    'shipping_address' => $request->shipping_address,
    'shipping_city' => $request->shipping_city,
    'shipping_country' => $request->shipping_country,
    'shipping_email' => $request->shipping_email,
    'note' => $request->note,
  
    'payment_type' => 'Cash on Delivery',
    'payment_method' => 'Cash on Delivery',
   
    'currency' => 'inr',
    'amount' => $total_amount,
    
  
    'invoice_no' => 'EM'.mt_rand(10000000,99999999),
    'order_date' => Carbon::now()->format('d F Y'),
    'status' => 'Pending',
    'created_at' => Carbon::now(),	 
  ]);

  
  $carts = Cart::content();
  foreach ($carts as $cart) {
    OrderItem::insert([
      'order_id' => $order_id, 
      'product_id' => $cart->id,
      'color' => $cart->options->color,
      'size' => $cart->options->size,
      'qty' => $cart->qty,
      'price' => $cart->price,
      'created_at' => Carbon::now(),
  
    ]);
      }
      Cart::destroy();
  
      $notification = array(
       'message' => 'Your Order Place Successfully',
       'alert-type' => 'success'
     );
  
     return redirect()->route('dashboard')->with($notification);
  
  }}
  





  

 // Start Send Email 
//    $invoice = Order::findOrFail($order_id);
//    $data = [
//        'invoice_no' => $invoice->invoice_no,
//        'amount' => $total_amount,
//        'name' => $invoice->name,
//        'email' => $invoice->email,
//    ];

//    Mail::to($request->email)->send(new OrderMail($data));