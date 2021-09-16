@extends('admin.frontend.user_master')
@section('index_content')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg-dark">
    <div class="container clearfix">
        <h2 class="title-page">Wishlist</h2>
    </div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
<!-- ========================= SECTION CONTENT ========================= -->

<div class="body-content">
	<div class="container">
		<div class="my-wishlist-page">
			<div class="row">
				<div class="col-xs-10 my-wishlist">
	<div class="table-responsive">
		<table class="table-card">
			<thead>
				<div class="col-md-8">

					<div class="table-responsive">
					  <table class="table">
						<tbody>
				
						  <tr>
							<td class="col-md-2">
							  <label for=""><b> Image</b></label>
							</td>
				
							<td class="col-md-2">
							  <label for=""><b> Price</b></label>
							</td>
				
				
							 <td class="col-md-4">
							  <label for=""><b> Action </b></label>
							</td>
				
						  </tr>
				
			</thead>
			<tbody id="wishlist">
				{{-- Wishlist body --}}
			</tbody>
		</table>
	</div>
</div>			
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
    </div>

@endsection