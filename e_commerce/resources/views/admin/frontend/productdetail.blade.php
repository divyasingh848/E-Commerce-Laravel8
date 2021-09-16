@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Product Detail View</h2>
    </div>
    <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row no-gutters">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                               
                                    
                                <div class="img-big-wrap"> @foreach ($product1b as $item)
                                    <div>
                                     <a href="#" data-fancybox=""><img src="{{ asset($item->product_thumbnail) }}"></a>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- slider-product.// -->
                                <div class="img-small-wrap"> @foreach ($multi_img1 as $item1)
                                    <div class="item-gallery"><img src="{{ asset($item1->photo_name) }}"></div>
                                    @endforeach
                                </div>
                                <!-- slider-nav.// -->
                            </article>
                            <!-- gallery-wrap .end// -->
                        </aside>
                        <aside class="col-sm-7">
                            @foreach ($product1b as $item)
                            <article class="p-5">
                                <h3 class="title mb-3" id="pname">{{$item->product_name}}</h3>

                                <div class="mb-3">
                                    <var class="price h3 text-warning">
    <span class="currency">Rs.</span><span class="num" id="pprice">{{ $item->selling_price}}</span>
</var>
                                </div>
                                <!-- price-detail-wrap .// -->
                                <dl>
                                    <dt>Description</dt>
                                    <dd>
                                        <p>{{$item->product_desc}} </p>
                                    </dd>
                                </dl>
                                
                                    
                                <dl class="row">
                                    <dt class="col-sm-3">Model#</dt>
                                    <dd class="col-sm-9">{{ $item->product_code}}</dd>

                                    <dt class="col-sm-3">Color</dt>
                                    <dd class="col-sm-9" id="color">{{ $item->product_color}} </dd>

                                    <dt class="col-sm-3">Delivery</dt>
                                    <dd class="col-sm-9">India</dd>
                                </dl>
                                
                                <div class="rating-wrap">

                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    {{-- <div class="label-rating">132 reviews</div> --}}
                                    {{-- <div class="label-rating">154 orders </div> --}}
                                </div>
                                <!-- rating-wrap.// -->
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <dl class="dlist-inline">
                                            <dt>Quantity: </dt>
                                            <dd>
                                                <select class="form-control form-control-sm" style="width:70px;" id="qty">
                                                    <option> {{$item->product_qty}} </option>
                                                </select>
                                            </dd>
                                        </dl>
                                        <dl class="dlist-inline">
                                            <dt>Size: </dt>
                                            <dd>
                                                <select class="form-control form-control-sm" style="width:70px;" id="qty">
                                                    <option> {{$item->product_size}} </option>
                                                </select>
                                            </dd>
                                        </dl>
                                        <dl class="dlist-inline">
                                            <dt>Color: </dt>
                                            <dd>
                                                <select class="form-control form-control-sm" style="width:70px;" id="qty">
                                                    <option> {{$item->product_color}} </option>
                                                </select>
                                            </dd>
                                        </dl>
                                        <!-- item-property .// -->
                                    </div>
                                    <!-- col.// -->
                                   
                                    @endforeach
                                    <!-- col.// -->
                                </div>
                                <!-- row.// -->
                                <hr>
                                {{-- <a href="#" class="btn  btn-primary"> Buy now </a> --}}

                              <input type="hidden" id="product_id" value="{{ $product2->id }}" >

                                <button class="btn  btn-outline-primary" type="submit" onclick="addToCart()"> <i class="fas fa-shopping-cart"></i> Add to cart </button>
                            </article>
                            <!-- card-body.// -->
                        </aside>
                        <!-- col.// -->
                    </div>
                    <!-- row.// -->
                </div>
                <!-- card.// -->

            </div>
            <div class="col-md-12">
                <article class="card mt-4">
                    <div class="card-body">
                        <h4>Detail overview</h4>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteurididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <!-- card-body.// -->
                </article>
            </div>
        </div>
    </div>
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg">Related PRODUCTS</h4>
        </header>
        <div class="row">
            @foreach ($product3 as $item)
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="{{ asset($item->product_thumbnail)}}"></div>
                    <figcaption class="info-wrap">
                        <h4 class="title"><a href="{{ url('product/details/'.$item->id)}}">{{ $item->product_name}}</a></h4>
                        <p class="desc">{{ $item->product_desc}}</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            
                        </div>
                        <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <button class="btn btn-primary icon float-right" data-toggle="modal" data-target="#exampleModal" type="button" id="{{ $item->id}}" onclick="myFun(this.id)">Add To Cart </button>
                        <div class="price-wrap h5">
                            <span class="price-new">Rs.{{$item->selling_price}}</span>
                        </div>
                        <!-- price-wrap.// -->
                    </div>
                    <!-- bottom-wrap.// -->
                </figure>
            </div>
            @endforeach
           
    <!-- container .//  -->
</section>


@endsection