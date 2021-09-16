@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Cart</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">

        <div class="row">
            <main class="col-sm-9">

            
<div class="body-content">
	<div class="container">
		<div class="my-cart-page">
			<div class="row">
				<div class="col-md-10 my-cart">
	<div class="table-responsive">
		<table class="table">
			
                <thead class="text-muted">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Product</th>
                        <th scope="col" width="120">Quantity</th>
                        <th scope="col" width="120">Price</th>
                        <th scope="col" class="text-right" width="200">Action</th>
                    </tr>
                </thead>
			
			<tbody id="myOrders">
				{{-- cart/order body --}}
                
			</tbody>
		</table>
	</div>
</div>			
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
    </div>
                <!-- card.// -->

            </main>
            <!-- col.// -->
            <aside class="col-sm-3">
                <p class="alert alert-success">Checkout From Here </p>
                
                <table class="table">
                    <thead  id="checkoutcall">
                        

                    </thead><!-- /thead -->
                    <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <a href="{{ route('checkout')}}" type="submit" class="btn btn-success checkout-btn">PROCCED TO CHEKOUT</a>
                                       
                                    </div>
                                </td>
                            </tr>
                    </tbody><!-- /tbody -->
                </table><!-- /table -->
            </aside>
            <!-- col.// -->
        </div>

    </div>
    <!-- container .//  -->
</section>
@endsection