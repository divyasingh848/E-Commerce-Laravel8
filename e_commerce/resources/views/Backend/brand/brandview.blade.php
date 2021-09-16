@extends('admin.admin_master')
@section('admin')

{{-- <main class="app-content"> --}}
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Brand Table</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-8">
        <div class="tile"><h3>Brand List</h3><br>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Brand Name</th>
                  <th>Brand Image</th>
                  <th>Action</th>
                </tr>
              </thead>
               <tbody>
                   @foreach ($brands as $item)
                <tr>
                  <td>{{ $item->name}}</td>
                  <td><img src="{{ asset($item->image)}}" style="width: 50px; height:50px;"></td>
                  
                  <td>
                      <a href="{{ route('brand.edit',$item->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{ url('brand/delete/'.$item->id)}}" onclick="return confirm('Do you want to delete?')" id="delete" class="btn btn-danger">Delete</a>
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
          <div class="tile-body"><h3>Add Brand</h3><br>
           
            <form method="POST" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group" >
                    <label>Brand Name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group" >
                    <label>Brand Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Add</button>


          </div>
        </div>

    </div>
  




@endsection