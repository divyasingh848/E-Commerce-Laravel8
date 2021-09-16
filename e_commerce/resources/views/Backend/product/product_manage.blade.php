@extends('admin.admin_master')
@section('admin')

    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Product Table</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-8">
        <div class="tile"><h3>Product List</h3><br>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Thumbnail Image</th> 
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
              </thead>
               <tbody>
                   @foreach ($product1 as $item)
                <tr>
                  <td><img src="{{ asset($item->product_thumbnail)}}" style="width: 60px; height:50px;"></td>
                  <td>{{ $item->product_name}}</td>
                  <td>{{ $item->selling_price}}</td>

                  <td>
                      <a href="{{ route('edit.product',$item->id)}}" class="btn btn-info">Edit</a>
                      <a href="{{ url('product/delete/'.$item->id)}}" onclick="return confirm('Do you want to delete?')" id="delete" class="btn btn-danger">Delete</a>
                      
                  </td>
                </tr>  
                @endforeach         
               </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>

@endsection    



