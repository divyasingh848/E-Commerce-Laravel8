@extends('admin.frontend.user_master')
@section('index_content')

<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Forget Password</h2>
    </div> <!-- container //  -->
</section>
<hr>
<div class="widget-header dropdown ">
    <form method="POST" action="{{ route('password.email') }}" >
        @csrf
        <div class="card ">
            <div class="form-group " >
                <label><b>Email address</b></label>
                <input id="email" type="email" name="email" class="form-control" required placeholder="email@example.com">
            </div>
            {{-- <hr> --}}
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