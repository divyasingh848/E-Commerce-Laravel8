@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
  <div class="container clearfix">
      <h2 class="title-page">Recent Orders</h2>
  </div>
  <!-- container //  -->
</section>
<br>
<div class="container">
    <div class="row">
       



   <div class="col-md-8">

    <div class="table-responsive">
      <table class="table">
        <tbody>

          <tr style="background: #e2e2e2;">
            <td class="col-md-1">
              <label for=""> Date</label>
            </td>

            <td class="col-md-3">
              <label for=""> Total</label>
            </td>

            <td class="col-md-2">
              <label for=""> Invoice No.</label>
            </td>

            <td class="col-md-2">
              <label for=""> Payment Method</label>
            </td>

             {{-- <td class="col-md-1">
              <label for=""> Action </label>
            </td> --}}

          </tr>


          @foreach($orders as $order)
   <tr>
            <td class="col-md-2">
              <label for=""> {{ $order->order_date }}</label>
            </td>

            <td class="col-md-2">
              <label for=""> Rs.{{ $order->amount }}</label>
            </td>

            <td class="col-md-2">
              <label for=""> {{ $order->invoice_no }}</label>
            </td>

            <td class="col-md-2">
              <label for=""> {{ $order->payment_method }}</label>
            </td>

     {{-- <td class="col-md-1">

       <a href="{{url('user/Orderdetails/'.$order_id)}}" class="btn btn-sm btn-danger"> Details </a>

    </td> --}}

          </tr> 
          @endforeach





        </tbody>

      </table>

    </div>


   </div> <!-- / end col md 8 -->
    </div>
</div>

   @endsection
