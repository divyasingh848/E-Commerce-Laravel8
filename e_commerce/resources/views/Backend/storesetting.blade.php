@extends('admin.admin_master')
@section('admin')

    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Store Setting</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-8">
        <div class="tile"><h3>Settings</h3><br>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Title_Name</th>
                  <th>Action</th>
                </tr>
              </thead>
               <tbody>
                   @foreach ($storesetting as $item)
                <tr>
                  <td>{{ $item->Title_Name}}</td>
                  
                  <td>
                      <a href="{{ route('edit.Setting',$item->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{ url('delete/'.$item->id)}}" onclick="return confirm('Do you want to delete?')" id="delete" class="btn btn-danger">Delete</a>
                  </td>
                </tr>  
                @endforeach          
               </tbody>
            </table>
          </div>
          
        </div>
      </div>

      <div class="col-4" style="float: right">
        <div class="tile">
          <div class="tile-body"><h3>Change Title_Name</h3><br>
           
            <form method="POST" action="{{ route('setting.store') }}">
                @csrf
                <div class="form-group" >
                    <label>Title Name</label>
                    <input type="text" name="Title_Name" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>


          </div>
        </div>

    </div>
  




@endsection