@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Reset Password</h2>
    </div> <!-- container //  -->
</section>
<hr>
<div class="widget-header dropdown ">
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="card " style="margin: 50px">
            <div class="form-group " >
                <label><b>Email</b></label>
                <input id="email" type="email" name="email" class="form-control" required placeholder="email@example.com" style="width:200px">
            </div>
            <div class="form-group " >
                <label><b>Password</b></label>
                <input id="password" type="password" name="password" class="form-control" required placeholder="New password" style="width:200px">
            </div>
            <div class="form-group " >
                <label><b>Confirm Password</b></label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required placeholder="Confirm Password" style="width:200px">
            </div>

            <button type="submit" class="btn btn-primary"><b>Email Password Reset Link</b></button>
            
        </div>
        </form>
       <hr>
    </div>
    <!--  dropdown-menu .// -->
</div>
<!-- widget  dropdown.// -->
</div>



@endsection