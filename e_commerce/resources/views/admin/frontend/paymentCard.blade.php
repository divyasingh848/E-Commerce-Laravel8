@extends('admin.frontend.user_master')
@section('index_content')

{{-- //css --}}
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 30px;
  width: 380px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>

{{-- css end  --}}

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
      <div class="card">
          <header class="card-header">
              <h4 class="card-title mt-1">Payment Method</h4>
          </header>
          <form action="{{route('card.order')}}" method="post" id="payment-form">
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
              <div id="card-element">
              <!-- A Stripe Element will be inserted here. -->
              </div>
              <!-- Used to display form errors. -->
              <div id="card-errors" role="alert"></div>
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


 {{-- javascript  start--}}

<script type="text/javascript">
    // Create a Stripe client.
var stripe = Stripe('pk_test_51JSEsgSBWqjraaOMjxtUMCO3Zb5LqFN5SDv7jAEfQfQxhKnaS2o82iABqWhUMIXiN3kk9hqIJTRp7MCog834h2o800jkUkqb6t');

// Create an instance of Elements.
var elements = stripe.elements();
// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
// Create an instance of the card Element.
var card = elements.create('card', {style: style});
// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');
// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});
// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);
  // Submit the form
  form.submit();
}
</script>

{{-- javascript End --}}

@endsection