<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Auth;
use Carbon\Carbon;

class CardController extends Controller
{
    public function cardPayment(Request $request){

      $total_amount = round(Cart::total());

\Stripe\Stripe::setApiKey('sk_test_51JSEsgSBWqjraaOMzh6kEWJEVcbMJBTPClGHjBIRXFBPZH50cTClq8fSBZt9jciOsXZQN0ri9mf2hR3IarEODJsW001geQSZCe');

$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
  'amount' => $total_amount*100,
  'currency' => 'INR',
  'description' => 'E-Mart',
  'source' => $token,
  'metadata' => ['order_id' => uniqid()],
]);

// dd($charge);

$order_id = Order::insertGetId([
  'user_id' => Auth::id(),
  'shipping_name' => $request->shipping_name,
  'shipping_address' => $request->shipping_address,
  'shipping_city' => $request->shipping_city,
  'shipping_country' => $request->shipping_country,
  'shipping_email' => $request->shipping_email,
  'note' => $request->note,

  'payment_type' => 'Card',
  'payment_method' => 'Card',
  'payment_type' => $charge->payment_method,
  'transaction_id' => $charge->balance_transaction,
  'currency' => $charge->currency,
  'amount' => $total_amount,
  'order_no' => $charge->metadata->order_id,

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
