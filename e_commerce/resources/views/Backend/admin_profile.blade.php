@extends('admin.admin_master')
@section('admin')

<main class="app-content" style="float: left">
    <div class="row user">
      <div class="col-md-12" >
        <div class="profile">
          <div class="info">
            <h4>{{ $admin->name}}</h4>
            <p>Developer</p>
          </div>
          <div class="cover-image"></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="tile p-0">
          <ul class="nav flex-column nav-tabs user-tabs">
            <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>
            
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane active" id="user-timeline">
            <div class="timeline-post">
              <div class="post-media">        
                   
                <div class="content">
                  <h5>Admin_name:<a href="#">{{ $admin->name}}</a></h5>
                  <h5>Email_id:<a href="#">{{ $admin->email}}</a></h5>
                  <h5>Verification_Time:<a href="#">{{ $admin->email_verified_at}}</a></h5>
                </div>
              </div>
              
            
          </div>
        </div>
      </div>
    </div>
  </main>


@endsection