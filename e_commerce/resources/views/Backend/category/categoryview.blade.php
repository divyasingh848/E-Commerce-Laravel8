@extends('admin.admin_master')
@section('admin')

    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Category Table</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-8">
        <div class="tile"><h3>Category List</h3><br>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </thead>
               <tbody>
                   @foreach ($category as $item)
                <tr>
                  <td>{{ $item->category_name}}</td>
                  {{-- <td><img src="{{ asset($item->image)}}" style="width: 50px; height:50px;"></td> --}}
                  
                  <td>
                      <a href="{{ route('category.edit',$item->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{ url('category/delete/'.$item->id)}}" onclick="return confirm('Do you want to delete?')" id="delete" class="btn btn-danger">Delete</a>
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
          <div class="tile-body"><h3>Add Category</h3><br>
           
            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="form-group" >
                    <label>Category Name</label>
                    <input type="text" name="category_name" class="form-control">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>


          </div>
        </div>

    </div>
  




@endsection