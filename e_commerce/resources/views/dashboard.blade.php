@extends('admin.frontend.user_master')
@section('index_content')
 

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="card-centre" style="margin: 90px" >
            <div class="col-md-20">
                <h1>WELCOME TO E-Mart!!</h1>
                <h2>User:{{Auth::user()->name}}  </h2>
                <hr>
            </div>
             <a href="{{route('user.profile')}}" class="btn btn-primary btn-xs-1 btn-block" style="float: right">Profile Update</a>
             <a href="{{route('user.order')}}" class="btn btn-primary btn-xs-1 btn-block" style="float: right">Recent Orders</a>
             <a href="{{route('user.logout')}}" class="btn btn-danger btn-xs-1 btn-block" style="float: right">Logout</a>
            </div> 
            <hr>
        </div>
    </div>
</div >



@endsection