@extends('admin.frontend.user_master')
@section('index_content')
    


<section class="section-main bg padding-top-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <!-- ================= main slide ================= -->
                <div class="owl-init slider-main owl-carousel" data-items="1" data-dots="false" data-nav="true">
                    <div class="item-slide">
                        <img src="{{ asset('frontend/images/banners/bg-cpu.jpg') }}">
                    </div>
                    <div class="item-slide rounded">
                        <img src="{{ asset('frontend/images/banners/banner-request.jpg') }}">
                    </div>
                    {{-- <div class="item-slide rounded">
                        <img src="{{ asset('frontend/images/banners/bg-pattern.svg') }}">
                    </div> --}}
                </div>
                <!-- ============== main slidesow .end // ============= -->
            </div>
            <!-- col.// -->
            <div class="col-md-3">
                @foreach ($product1 as $item)
                <div class="card mt-3 mb-4">
                    <figure class="itemside">
                        <div class="aside">
                            <div class="img-wrap img-sm border-right"><img src="{{ asset($item->product_thumbnail) }}"></div>
                        </div>
                        <figcaption class="p-3">
                            <h6 class="title"><a href="{{ url('product/details/'.$item->id)}}">{{ $item->product_name}}</a></h6>
                            <div class="price-wrap">
                                <span class="price-new b">Rs.{{ $item->selling_price}}</span>
                                {{-- <del class="price-old text-muted">$1980</del> --}}
                            </div>
                            <!-- price-wrap.// -->
                        </figcaption>
                    </figure>
                </div>
                @endforeach
                <!-- card.// -->
                <!-- card.// -->
            </div>
            <!-- col.// -->
        </div>
    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->
<!-- ========================= Blog ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg">Featured Categories</h4>
        </header>
        <div class="row">
            @foreach ($product as $item1)
            <div class="col-md-4">
                
                <div class="card-banner" style="height:150px">
                    <div class="img-wrap img-sm border-right" ><img src="{{ asset($item1->product_thumbnail) }}" style="height: 200px, width:200px";>
                    </div>
                    
                <article class="overlay overlay-cover d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <h5 class="card-title">{{$item1->product_name}}</h5>
                            {{-- <a href="#" class="btn btn-warning btn-sm"> View All </a> --}}
                        </div>
                    </article>
                </div>
               
                <!-- card.// -->
            </div> @endforeach
        </div>
    </div>
</section>
<!-- ========================= Blog .END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y-sm bg">
    <div class="container">

        <header class="section-heading heading-line">
            <h4 class="title-section bg">FEATURED PRODUCTS</h4>
        </header>
        <div class="row">
            @foreach ($product1a as $item)
            <div class="col-md-4">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="{{ asset($item->product_thumbnail) }}"></div>
                    <figcaption class="info-wrap">
                        <h6 class="title"><a href="{{ url('product/details/'.$item->id)}}">{{ $item->product_name}}</a></h6>
                        <p class="desc">{{$item->product_desc}}</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                
                            </ul>

                            <button class="btn btn-primary icon float-right" title="wishlist" type="button" id="{{ $item->id}}" onclick="addToWishlist(this.id)"><i class="fa fa-heart"></i></button>
                        
                        </div>
                        <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        <input type="hidden"  id="product_id">
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
            <!-- col // -->
        </div>
        <!-- row.// -->

    </div>
    <!-- container .//  -->
</section>

<!-- ========================= SECTION ITEMS ========================= -->
<section class="section-request bg padding-y-sm">
    <div class="container">
        <header class="section-heading heading-line">
            <h4 class="title-section bg text-uppercase">Recently Added</h4>
        </header>
        <div class="row">
            @foreach ($product1b as $item)
            <div class="col-md-3">
                <figure class="card card-product">
                    <div class="img-wrap"><img src="{{ asset($item->product_thumbnail) }}"></div>
                    <figcaption class="info-wrap">
                        <h4 class="title"><a href="{{ url('product/details/'.$item->id)}}">{{ $item->product_name}}</a></h4>
                        </h4>
                        <p class="desc">{{ $item->product_desc }}</p>
                        <div class="rating-wrap">
                            <ul class="rating-stars">
                                <li style="width:80%" class="stars-active">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                </li>
                            </ul>
                            {{-- <div class="label-rating">132 reviews</div>
                            <div class="label-rating">154 orders </div> --}}
                        </div>
                        <!-- rating-wrap.// -->
                    </figcaption>
                    <div class="bottom-wrap">
                        
                        <button class="btn btn-primary icon float-right" data-toggle="modal" data-target="#exampleModal" type="button" id="{{ $item->id}}" onclick="myFun(this.id)">Add To Cart </button>

                        {{-- <button type="submit" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary float-right">Add To Cart</button> --}}
                        <div class="price-wrap h5">
                            <span class="price-new">Rs.{{ $item->selling_price }}</span>
                        </div>
                        <!-- price-wrap.// -->
                    </div>
                    <!-- bottom-wrap.// -->
                </figure>
            </div>
            @endforeach
        </div>
        <!-- row.// -->

    </div>
    <!-- container // -->
</section>



@endsection