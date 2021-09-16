<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">

    <!-- jQuery -->
    <script src="{{ asset('frontend/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('frontend/css/bootstrap.css?v=1.0') }}" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="{{ asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="{{ asset('frontend/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('frontend/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
    <script src="{{ asset('frontend/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- custom style -->
    <link href="{{ asset('frontend/css/ui.css?v=1.0') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script>
     {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Stripe Payment --}}
    <script src="https://js.stripe.com/v3/"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>
    <header class="section-header">
        <section class="header-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="brand-wrap">
                            {{-- <img class="logo" src="{{ asset('frontend/images/logo-dark.png') }} "> --}}

                            @php
                            $storesetting = App\Models\StoreSetting::orderBy('Title_Name','ASC')->limit(1)->get();
                            @endphp 

                             @foreach ($storesetting as $item1)
                                 
                            <h1 class="logo-text"><a href="{{ url('/')}}">{{$item1->Title_Name}}</h1></a>
                            @endforeach

                        </div>
                        <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <form action="#" class="search-wrap">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- search-wrap .end// -->
                    </div>
                    <!-- col.// -->

                    <div class="col-auto col-auto col-auto animate-dropdown top-cart-row"> 
                        <!-- ============ SHOPPING CART DROPDOWN ================= -->
                        
                        <div class="dropdown dropdown-cart"><a href="{{route('cart')}}">
                          <div class="items-cart-inner">
                            <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-shopping-cart "></i></div>
                            <div class="basket-item-count"></div>
                            <div class="total-price-basket"><span class="count" id="cartQty"></span><span class="lbl">-Basket</span> <span class="total-price"> <span class="sign"></span>
                            </div>
                          </div>
                          </a>
                          <ul class="dropdown-menu">
                            <li>

                    {{-- //Mini Cart start with ajax --}}

                    <div id = "miniCart">
                    </div>

                    {{-- //End Mini Cart --}}

                  
                              <div class="clearfix cart-total">
                                <div class="pull-right"> <span class="text">Sub Total :</span><span class='price' id="cartSubTotal"></span> </div>
                                <div class="clearfix"></div>
                                <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                              <!-- /.cart-total--> 
                              
                            </li>
                          </ul> 
                          <!-- /.dropdown-menu--> 
                        </div>
                        <!-- /.dropdown-cart --> 
                       
                      
                    </div>
                   
                        <a href="{{ route('login')}}" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10"></a>
                            <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div>
                            <div class="text-wrap">
                                {{-- <small><b>{{Auth::user()->name}}</b></small> --}}
                                <span><a href="{{ url('/login')}}"> Login</a></span>
                                {{-- <i class="fa fa-caret-down"> --}}
                            </div>
                               
                </div>
                <!-- row.// -->
            </div>
            <!-- container.// -->
        </section>
        <!-- header-main .// -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                    {{-- taking data from db and as it is not connected wid any controller i.e why we have use path of models    --}}
                    @php
                    $categories = App\Models\Category::orderBy('category_name','ASC')->get();
                    @endphp 
                        @foreach ($categories as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $item->category_name }}  |</a>
                        </li>
                        @endforeach
                    
                    </ul>
                </div>
                <!-- collapse .// -->
            </div>
            <!-- container .// -->
        </nav>

    </header>
    <!-- section-header.// -->

    <!-- ========================= SECTION MAIN ========================= -->
     
    @yield('index_content')

    <!-- ========================= Subscribe ========================= -->
    <section class="section-subscribe bg-primary padding-y-lg">
        <div class="container">

            <p class="pb-2 text-center white">Delivering the latest product trends and industry news straight to your inbox</p>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-sm-6">
                    <form class="row-sm form-noborder">
                        <div class="col-8">
                            <input class="form-control" placeholder="Your Email" type="email">
                        </div>
                        <!-- col.// -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block btn-warning"> <i class="fa fa-envelope"></i> Subscribe </button>
                        </div>
                        <!-- col.// -->
                    </form>
                    <small class="form-text text-white-50">We’ll never share your email address with a third-party. </small>
                </div>
                <!-- col-md-6.// -->
            </div>

        </div>
        <!-- container // -->
    </section>
    <!-- ========================= Subscribe .END// ========================= -->
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-dark white">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="{{route('cart')}}"> My Orders </a></li>
                            <li> <a href="{{route('wishlist')}}"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +123456789
                                <br>
                                <strong>Fax:</strong> +123456789
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div>
                <!-- row.// -->
                <br>
            </section>
            <section class="footer-bottom row border-top-white">
                <div class="col-sm-6">
                    <p class="text-white-50"> Made with
                        <3 <br> by Vosidiy M.</p>
                </div>
                <div class="col-sm-6">
                    <p class="text-md-right text-white-50">
                        Copyright &copy
                        <br>
                        <a href="http://bootstrap-ecommerce.com" class="text-white-50">Bootstrap-ecommerce UI kit</a>
                    </p>
                </div>
            </section>
            <!-- //footer-top -->
        </div>
        <!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><span id="pname"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
          <div class="row">
            <div class="col-md-4">
              <div class="card" style="width: 10rem;">
                <img src="..." class="card-img-top" alt="..." style="height: 100px; width:100px;" id="pimg">
                
               </div>
              </div>
            </div>
            
            <div class="form-group">
            <div>Price:<strong id="pprice"></strong></div>
            </div> 

            {{-- <div class="col-md-4">  --}}
              <div class="form-group">
                <label for="color">Select Color</label>
                <select class="form-control" id="color" name="color">
                  
                </select>
              </div>

              <div class="form-group">
                <label for="size">Select Size</label>
                <select class="form-control" id="size" name="size">
                </select>
              </div>

              <div class="form-group">
                <label for="qty">Select Quantity</label>
                <select class="form-control" id="qty" name="qty">
                </select>
              </div>

            <input type="hidden" id="product_id">  
            <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()">Add</button>
          {{-- </div> --}}
        

        </div>
        <div class="modal-footer">
          
      </div>
    </div>
  </div>
{{-- end --}}

 <script type="text/javascript">
     $.ajaxSetup({
         headers:{
             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
         }
     })
     //The ajaxSetup() method in jQuery is used to set the default values for future AJAX requests.

    function myFun(id){
        // alert(id)
        $.ajax({
            type:'GET' ,
            url: '/product/view/modal/'+id ,
            dataType:'json',
            success:function(data){
                // console.log(data)
                $('#pname').text(data.product.product_name);
                $('#pimg').attr('src','/'+data.product.product_thumbnail);
                $('#pprice').text(data.product.selling_price);

                $('#product_id').val(id);
                // $('#qty option:selected').text();

                $('select[name="color"]').empty();
                $.each(data.color,function(key,value){
                    $('select[name="color"]').append('<option value=" '+value+' ">'+value+'</option>')
                })

                $('select[name="size"]').empty();
                $.each(data.size,function(key,value){
                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+'</option>')
                })

                $('select[name="qty"]').empty();
                $.each(data.qty,function(key,value){
                    $('select[name="qty"]').append('<option value=" '+value+' ">'+value+'</option>')
                })
            }
        })
    }


    function addToCart()
    {
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var qty = $('#qty option:selected').text();
        $.ajax({
            type:"POST",
            dataType:'json',
            data:{
                color:color , size:size , qty:qty , product_name:product_name
            },
            url:'/cart/data/store/' + id,
            success:function(data){

                miniCart2()
                $('#closeModal').click();
                // console.log(data)

            const Toast = Swal.mixin({
                toast:true,
                position: 'top-end',
                icon: 'success',
                // title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
            if($.isEmptyObject(data.error)){
                Toast.fire({
                    type:'success',
                    title:data.success
                })
            }
            else{
                Toast.fire({
                    type:'error',
                    title:data.error
                    })
            }
        }
      })
    }
    
 </script>    

<script type="text/javascript">

    function miniCart2(){
        $.ajax({
        type:'GET',
        url: '/product/mini/cart',
            dataType:'json',
            success:function(response){
                // console.log(response)
                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                var miniCart = ""

                $.each(response.carts, function(key,value){
                    miniCart += `<div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-lg-10">
                      <div class="image"> <a href="detail.html"><img src="/${value.options.image}" alt=""></a> </div>
                    </div>
                    <div class="col-lg-10">
                      <h6 class="name"><a href="index.php?page-detail">${value.name}</a></h6>
                      <div class="price">${value.price} * ${value.qty}</div>
                    
                    <div class="col-xs-1 action"> <button type="submit" id="${value.rowId}" onClick="miniCartRemove(this.id)"><i class="fa fa-trash"></i></button> </div>
                  </div></div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>`
                });
                
                $('#miniCart').html(miniCart);
            }
        })
     }
    miniCart2();

   //start miniCartRemove()

   function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart2();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }


   //end miniCartRemove()

</script> 

{{--  Start of Add Wishlist --}}

<script type="text/javascript">
   
   function addToWishlist(product_id){
    $.ajax({
            type: 'POST',
            url: '/add-to-wishlist/'+product_id,
            dataType:'json',
            success:function(data){
               
                // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 

            }


   })
   }
</script>

<!-- /// Load Wishlist Data  -->


<script type="text/javascript">
    function wishlist(){
       $.ajax({
           type: 'GET',
           url: '/user/get-wishlist-product',
           dataType:'json',
           success:function(response){
               var rows = ""
               $.each(response, function(key,value){
                   rows += `<tr>
                   <td class="col-xs-10" ><img src="/${value.product.product_thumbnail} " alt="imga" width="100px" height="100px"></td>
                   <td class="col-md-7">
                       <div class="product-name"><a href="#">${value.product.product_name}</a></div>
                        
                       <div class="price">
                       ${value.product.selling_price}
                          
                       </div>
                   </td>
       <td class="col-md-2">
           <button class="btn btn-primary icon" type="button" title="Add Cart" data-toggle="modal" data-target="#exampleModal" id="${value.product_id}" onclick="myFun(this.id)"> Add to Cart </button>
       </td>
       <td class="col-md-1 close-btn">
           <button type="submit" class="" id="${value.id}" onClick="wishlistRemove(this.id)"><i class="fa fa-times"></i></button>
       </td>
               </tr>`
       });
               
               $('#wishlist').html(rows);
           }
       })
    }
wishlist();

//start wishlistRemove()

function wishlistRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/wishlist-remove/'+id,
            dataType:'json',
            success:function(data){
                wishlist();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }

   //end wishlistRemove()

</script> 
{{-- end of wishlist --}}



<!-- /// Load cart Data  -->
{{-- // $.ajax jQuery Ajax method // --}}

<script type="text/javascript">
    function cart(){
       $.ajax({
           type: 'GET',
           url: '/user/get-cart-products',
           dataType:'json',
           success:function(response){
            var rows = ""
    $.each(response.carts, function(key,value){
        rows += `<tr>
        <td class="col-md-2"><img src="/${value.options.image} " alt="img"></td>
        
        <td class="col-md-8">
            <div class="product-name"><a href="#">${value.name}</a>
            <div class="price"><b>Size:</b> ${value.options.size}</div>
            <div class="price"><b>Color:</b> ${value.options.color}</div>
            </div></td>
             
            <td class="col-md-2">
            <div class="qty"> 
                            ${value.qty}
                        </div>
                    </td> 

            <td class="col-md-2">
            <div class="price"> 
                           Rs. ${value.subtotal}
                        </div>
                    </td>

           

        <td class="col-md-2 close-btn">
            <button type="submit" class="" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times"></i></button>
        </td>

        
                </tr>`
        });
                
                $('#myOrders').html(rows);
           }
       })
    }
cart();

//start cartRemove()

function cartRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
                cart();
                miniCart2();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }

   //end cartRemove()

</script> 

<script type="text/javascript">
 function CheckoutCall(){
       $.ajax({
           type: 'GET',
           url: '/user/checkoutcall',
           dataType:'json',
           success:function(data){
            if (data.total) {
                $('#checkoutcall').html(
                    `<tr>
                <th>
                    <div class="cart-sub-total">
                        Total Price:<span class="inner-left-md">Rs. ${data.total}</span>
                    </div><br>
                    <div class="cart-grand-total">
                        Total:<span class="inner-left-md">Rs. ${data.total}</span>
                    </div>
                </th>
            </tr>`
            )
           }else{}
       }
       })
    }
    CheckoutCall();

</script>



 
</body>

</html>