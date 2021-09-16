@extends('admin.admin_master')
@section('admin')

{{-- <main class="app-content"> --}}
    {{-- <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i> Brand Table</h1>
      </div>
    </div> --}}

    <div class="row">
      <div class="col-8">
       

      <div class="col-12" style="float: right">
        <div class="tile">
          <div class="tile-body"><h3>Search By Date</h3><br>
           
            <form method="POST" action="{{ route('searchByDate') }}">
                @csrf
                <div class="form-group" >
                    <h5>Select Date <span class="text-danger">*</span></h5>
		            <div class="controls">
	                <input type="date" name="date" class="form-control" > 
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="text-xs-right">
                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Search">					 
                                        </div>
                                    </form>


          </div>
        </div>

    </div>
  
@endsection