@extends('admin.admin_master')
@section('admin')

    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Shipping Table</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-8">
        <div class="tile">
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Shipping Method</th>
                  <th>Shipping Charges</th>
                  
                </tr>
              </thead>
               <tbody>
                   @foreach ($shipping as $item)
                <tr>
                  <td>{{ $item->Shipping_Method}}</td>
                  <td>{{ $item->Shipping_Charges}}</td>
                  
                </tr>  
                @endforeach         
               </tbody>
            </table>
          </div>
          
        </div>
      </div>

      <div class="col-4" style="float: right">
        <div class="tile">
          <div class="tile-body"><h3>Add Type-Charges</h3><br>
           
            <form method="POST" action="{{ route('shipping.store') }}">
                @csrf
                <div class="form-group" >
                    <label>Shipping_Method</label>
                    <input type="text" name="Shipping_Method" class="form-control">

                </div>

                <div class="form-group" >
                    <label>Shipping-Charges</label>
                    <input type="text" name="Shipping_Charges" class="form-control" placeholder="Rupees">
                   
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>


          </div>
        </div>

    </div>
  
@endsection