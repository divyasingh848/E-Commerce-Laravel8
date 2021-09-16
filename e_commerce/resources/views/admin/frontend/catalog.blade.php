@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Catalog Page</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->

<section class="section-content bg padding-y">
<div class="container">

    <div class="row">
        <aside class="col-sm-3">

            <div class="card card-filter">
                <article class="card-group-item">
                    <header class="card-header">
                        <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
                            <i class="icon-action fa fa-chevron-down"></i>
                            <h6 class="title">By Category</h6>
                        </a>
                    </header>
                    <div style="" class="filter-content collapse show" id="collapse22">
                        <div class="card-body">
                            <form class="pb-3">
                                <div class="input-group">
                                    <input class="form-control" placeholder="Search" type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                           @foreach ($category1 as $item)
                               
                           
                            <ul class="list-unstyled list-lg">
                                <li><a href="#">{{$item->category_name}}<span class="float-right badge badge-light round"></span> </a></li>
                            </ul>@endforeach
                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- collapse .// -->
                </article>
               
                <article class="card-group-item">
                    <header class="card-header">
                        <a href="#" data-toggle="collapse" data-target="#collapse44">
                            <i class="icon-action fa fa-chevron-down"></i>
                            <h6 class="title">By Brand </h6>
                        </a>
                    </header>
                    <div class="filter-content collapse show" id="collapse44">
                        <div class="card-body">
                            <form>@foreach ($brand1 as $item)
                                
                            
                                <label class="form-check">
                                    <input class="form-check-input" value="" type="checkbox">
                                    <span class="form-check-label">
                <span class="float-right badge badge-light round"></span>{{$item->name}}
                                    </span>
                                </label>
                                
                            </form>@endforeach
                        </div>
                        <!-- card-body.// -->
                    </div>
                    <!-- collapse .// -->
                </article>
                <!-- card-group-item.// -->
            </div>
            <!-- card.// -->

        </aside>
        <!-- col.// -->
        <main class="col-sm-9">

            <article class="card card-product">
                <div class="card-body">
                    <div class="row">
                        @foreach ($product1b as $item)
                            
                        <aside class="col-sm-3">
                            <div class="img-wrap"><img src="{{ asset($item->product_thumbnail)}}"></div>
                        </aside>
                        <!-- col.// -->
                        <article class="col-sm-6">
                            <h4 class="title"> {{$item->product_name}}  </h4>
                            <div class="rating-wrap  mb-2">
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
                                {{-- <div class="label-rating">132 reviews</div>
                                <div class="label-rating">154 orders </div> --}}
                            </div>
                            <!-- rating-wrap.// -->
                            <p>{{$item->product_desc}} </p>
                        </article>
                        <!-- col.// -->
                        <aside class="col-sm-3 border-left">
                            <div class="action-wrap">
                                <div class="price-wrap h4">
                                    <span class="price"> {{$item->selling_price}}</span>
                                </div>
                                <!-- info-price-detail // -->
                                <p class="text-success">Free shipping</p>
                                <br>
                                <p>
                                    {{-- <a href="#" class="btn btn-primary"> Buy now </a> --}}
                                    <a href="{{ url('product/details/'.$item->id)}}" class="btn btn-primary"> Details  </a>
                                </p>
                            </div>
                            <!-- action-wrap.// -->
                        </aside>@endforeach
                        <!-- col.// -->
                    </div>
                    <!-- row.// -->
                </div>
                <!-- card-body .// -->
            </article>
            <!-- card product .// -->

           
            <!-- card product .// -->

        </main>
        <!-- col.// -->
    </div>

</div>
<!-- container .//  -->
</section>


@endsection