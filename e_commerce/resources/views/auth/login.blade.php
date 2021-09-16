@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Login</h2>
    </div> <!-- container //  -->
</section>
<div class="widget-header dropdown">
    <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
        {{-- <div class="icon-wrap icon-xs bg2 round text-secondary"><i class="fa fa-user"></i></div> --}}
        {{-- <div class="text-wrap">
            <small>Hello.</small>
            <span>Login <i class="fa fa-caret-down"></i></span>
        </div> --}}
    </a>
    {{-- <div class="dropdown-menu dropdown-menu-right"> --}}
        <form class="px-4 py-4" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
            @csrf
            <div class="card" style="margin:auto">
            <div class="card-body">    
            <div class="form-group" >
                <label><b>Email address</b></label>
                <input id="email" type="email" name="email" class="form-control" required placeholder="email@example.com" style="width:200px">
            </div>
            <div class="form-group ">
                <label><b>Password</b></label>
                <input type="password" name="password" required class="form-control" placeholder="Password" style="width:200px">
            </div>
            <button type="submit" class="btn btn-primary"><b>Sign in</b></button>
            </div> </div>
        </form>
        <hr class="dropdown-divider">
        {{-- <a class="dropdown-item" href="#">Have account? Sign up</a> --}}
        <a class="dropdown-item" href="{{ route('password.request') }}"><b>Forgot password?</b></a>
        <hr>
    </div>
    <!--  dropdown-menu .// -->
</div>
<!-- widget  dropdown.// -->
</div>



@endsection