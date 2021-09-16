@extends('admin.frontend.user_master')
@section('index_content')


<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Payment</h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<section class="section-content bg padding-y">
    <div class="container">
        <div class="row">
           
            <div class="col-md-14">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Cart Total</h4>
                            </header>
                            <article class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total: </dt>
                                    <dd class="text-right h5 b">Rs.{{$cartTotal}} </dd>
                                </dl>
                            </article>
                        </div>
                    </div>
               

                    
  <div class="col-md-14 mt-4" >
      <div class="card" style="float: right">
          <header class="card-header">
              <h4 class="card-title mt-1">Payment Method</h4>
          </header>
          <form action="{{route('cash.order')}}" method="post" id="payment-form">
              @csrf
          <div class="form-row">
              <label for="card-element">
             
            <input type="hidden" name="shipping_name" value="{{ $data['shipping_name'] }}">
            <input type="hidden" name="shipping_address" value="{{ $data['shipping_address'] }}">
            <input type="hidden" name="shipping_city" value="{{ $data['shipping_city'] }}">
            <input type="hidden" name="shipping_country" value="{{ $data['shipping_country'] }}">
            <input type="hidden" name="shipping_email" value="{{ $data['shipping_email'] }}">
            <input type="hidden" name="note" value="{{ $data['note'] }}">
              </label>
  <br>
          </div>
          <hr>
          <button class="btn btn-primary">Submit Payment</button>
          </form>
    
                        </div>
                    </div>
                </div> 
            </div>   
        </div>
    </div>
</section>


 

@endsection