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
          <div class="tile-body"><h3>Add Category</h3><br>
           
            <form method="POST" action="{{ route('category.update',$category->id ) }}">
                @csrf

                <input type="hidden" name="id" value="{{ $category->id }}">

                <div class="form-group" >
                    <label>Category Name</label>
                    <input type="text" name="category_name" value="{{ $category->category_name}}" class="form-control">
                    @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>


          </div>
        </div>

    </div>
  




@endsection