@extends('admin.admin_master')
@section('admin')


    <div class="row">
      <div class="col-md-12">
        <div class="tile"><h2>Add Products</h2><hr>
          <div class="row">
    <div class="col-lg-10">

    <form method="post" action="{{ route('product.store')}}" enctype="multipart/form-data">
      @csrf  
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <h6>Brand Select</h6>
            <div class="control">
                <select name="brand_id" class="form-control" required>
                <option value="" selected="" disabled="" >Select Brand</option>
                @foreach ($brands as $brand)
            <option value="{{ $brand->id}}">{{$brand->name}}</option>
            @endforeach 
                </select>   
            </div></div></div></div>  
                      
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <h6>Category Select</h6>
                    <div class="control">
                        <select name="category_id" class="form-control" required>
                        <option value="" selected="" disabled="">Select Category</option>
                        @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{$category->category_name}}</option>
                    @endforeach 
                        </select>   
                    </div></div></div></div> 

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <h6>Product Name</h6>
                <div class="control">
                    <input class="form-control" name="product_name" type="text" placeholder="Product name" required> 
                </div></div></div></div>     
                
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <h6>Product Code</h6>
                <div class="control">
                    <input class="form-control" name="product_code" type="text" placeholder="Product name" required> 
            </div></div></div> 

        <div class="col-md-4">
            <div class="form-group">
                <h6>Product Quantity</h6>
            <div class="control">
                <input class="form-control" name="product_qty" type="text" placeholder="Product Quantity" required> 
            </div></div></div>         
    
        <div class="col-md-4">
            <div class="form-group">
                <h6>Product Size</h6>
            <div class="control">
                <input class="form-control" name="product_size" type="text" placeholder="Product Size" data-role="tagsinput" value="Small,Medium,Large" required> 
            </div></div></div></div>        

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <h6>Product Color</h6>
                <div class="control">
                    <input class="form-control" name="product_color" type="text" placeholder="Product Color" value="Black,White" data-role="tagsinput" required> 
            </div></div></div> 

        <div class="col-md-6">
            <div class="form-group">
                <h6>Selling Price</h6>
            <div class="control">
                <input class="form-control" name="selling_price" type="text" placeholder="Product Price" required> 
            </div></div></div>         
          </div>  
        
        <div class="row">  
        <div class="col-md-6">     
          <div class="form-group">
            <h6>Product Thumbnail</h6>
          <div class="control">
             <input class="form-control-file" name="product_thumbnail" type="file" aria-describedby="fileHelp" onchange="product_thumbnail(this)" required>

             <img src="" id="p_thumb">
        </div> </div> </div>

        <div class="col-md-6">     
          <div class="form-group">
            <h6>Multi Image</h6>
          <div class="control">
             <input class="form-control-file"  name="multi_imgs[]" type="file" aria-describedby="fileHelp" multiple="" id="multiImg" required>
          </div></div></div>  </div> 
        
          <div class="row">  
            <div class="col-md-12">     
              <div class="form-group">
                <h6>Product Description</h6>
                <div class="form-group">
                  <textarea class="form-control" name="product_desc" id="exampleTextarea" rows="3" required></textarea>
            </div> </div> </div></div>
        
            <div class="row">  
              <div class="col-md-12">     
                <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="featured" value="1" >Featured
                </label>
                </div>      
                  
            <div class="tile-footer">
              <input class="btn btn-rounded btn-primary mb-2" type="submit" value="Add Product">
            </div>
          </div>
            
         
        </div>
    </form>
      </div>
    </div>
  </main>
    
<script>

   function product_thumbnail(input){
     if(input.files && input.files[0]){
       var reader = new FileReader();
       onload.reader = function(e){
         $('#p_thumb').attr('src',e.target.result).width(90).height(90);
       };
       reader.readAsDataURL(input.files[0]);
     }

   }

</script>  

@endsection