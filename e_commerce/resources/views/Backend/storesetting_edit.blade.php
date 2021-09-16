@extends('admin.admin_master')
@section('admin')

    {{-- <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Category Table</h1>
      </div>
    </div> --}}

    <div class="row">
     

      <div class="col-4" style="float: right">
        <div class="tile">
          <div class="tile-body"><h3>Update Title_Name</h3><br>
           
            <form method="POST" action="{{ route('setting.update',$storesetting->id ) }}">
                @csrf

                <input type="hidden" name="id" value="{{ $storesetting->id }}">

                <div class="form-group" >
                    <label>Title Name</label>
                    <input type="text" name="Title_Name" value="{{ $storesetting->Title_Name}}" class="form-control">
                   
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>


          </div>
        </div>

    </div>
  




@endsection