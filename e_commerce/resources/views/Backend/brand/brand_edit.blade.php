@extends('admin.admin_master')
@section('admin')

<main class="app-content">
    {{-- <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Edit Brand </h1>
      </div>
    </div> --}}

    <div class="row">
     

      <div class="col-8" style="float: right">
        <div class="tile">
          <div class="tile-body"><h3>Edit Brand</h3><br>
           
            <form method="POST" action="{{ route('brand.update',$brand->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $brand->id }}">
                <input type="hidden" name="old_image" value="{{ $brand->image }}">
                <div class="form-group" >
                    <label>Brand Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $brand->name }}">
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
                <button type="submit" class="btn btn-primary">Update</button>


          </div>
        </div>

    </div>
  




@endsection