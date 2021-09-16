@extends('admin.frontend.user_master')
@section('index_content')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Checkout</h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<section class="section-content bg padding-y">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Billing Details</h4>
                    </header>
                    <article class="card-body">
                        <form  class="register-form" action="{{route('place.order')}}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Name</label>
                                    <input type="text" name="shipping_name" class="form-control" value="{{Auth::user()->name}}" placeholder="" required>
                                </div>
                            </div>
                            <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="shipping_address" placeholder="" required>
                            </div>
                            <!-- form-group end.// -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="shipping_city" required>
                                </div>
                                <!-- form-group end.// -->
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <select id="inputState" class="form-control" name="shipping_country">
                                        <option>India</option>
                                    </select>
                                </div>
                                <!-- form-group end.// -->
                            </div>
                            
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="shipping_email" class="form-control" value="{{Auth::user()->email}}" placeholder="" required>
                                
                            </div>
                            <!-- form-group end.// -->
                            <div class="form-group">
                                <label>Order Notes</label>
                                <textarea class="form-control" name="note" rows="6"></textarea>
                            </div>
                            <!-- form-group end.// -->
                       
                    </article>
                </div>
                <!-- card.// -->
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Your Order</h4>
                            </header>
                            <article class="card-body">
                                @foreach ($carts as $item)
                                    
                                <dl class="dlist-align">
                                    <dt>Product: </dt>
                                    <dd class="text-right">{{$item->name}}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Color:</dt>
                                    <dd class="text-right">{{$item->options->color}}</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total cost: </dt>
                                    <dd class="text-right h5 b">Rs.{{$item->price}} </dd>
                                </dl><hr>
                                @endforeach
                                <dl class="dlist-align">
                                    <dt>Total: </dt>
                                    <dd class="text-right h5 b">Rs.{{$cartTotal}} </dd>
                                </dl>
                            </article>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Shipment Type</h4>
                            </header>
                            <article class="card-body">
                                <label class="form-check">
                                    
                    @php
                    $shipping = App\Models\Shipping::orderBy('Shipping_Method','ASC')->get();
                    @endphp 
                                    
                                    @foreach ($shipping as $item)
                                    
                               
                                  <input class="form-check-input" type="radio" name="Shipping_Method" value="">
                                  <span class="form-check-label">
                                  <b> {{$item->Shipping_Method}}</b>
                                  {{-- - Rs.{{$item->Shipping_Charges}} --}}
                                  </span><br>
                                   @endforeach
                                </label>
                                
                            </article>
                        </div>
                    </div>
                    
                    <div class="col-md-12 mt-4">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Payment Method</h4>
                            </header>
                            <article class="card-body">
                                {{-- <label class="form-check">
                                  <input class="form-check-input" type="radio" name="payment_method" value="Card">
                                  <span class="form-check-label">
                                    Card
                                  </span>
                                </label> --}}
                                <label class="form-check">
                                  <input class="form-check-input" type="radio" name="payment_method" value="Cash">
                                  <span class="form-check-label">
                                    Cash on Delivery
                                  </span>
                                </label>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="subscribe btn btn-success btn-lg btn-block" type="submit">Place Order</button>
                    </div>
                </div> 
            </div></form>
        </div>
    </div>
</section>


@endsection