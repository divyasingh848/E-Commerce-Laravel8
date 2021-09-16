@extends('admin.frontend.user_master')
@section('index_content')
    
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">User Profile</h2>
    </div>
    <!-- container //  -->
</section>



<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="card-centre" style="margin: 90px" >
            <div class="col-md-20">
                <h1>WELCOME TO E-Mart!!</h1>
                <h2>User:{{Auth::user()->name}}  </h2>
                <hr>
            </div>
            <div class="card-body">
              <form method="post"  action="{{route('userprofile.update')}}">
               @csrf
                <div class="form-group">
                 <label>Name</label>
                 <input type="text" name="name" value="{{$user->name}}" >
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{$user->email}}" >
                   </div>
                <button type="submit" class="btn btn-danger">Update</button>   
              </form>
            </div>
            
            </div> 
            <hr>
        </div>
    </div>
</div >



@endsection