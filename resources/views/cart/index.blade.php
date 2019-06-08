@extends('layouts.app')
@section('title', '|Products List Page')

@section('description', 'Sir-erics- The list of the products onsale on our site')

@section('content')
        <!-- Portfolio Projects -->
		<div class="container marginbot50">
				<div class="row">
					<div class="col-lg-12">
							<p class="h3">Product Details</p>
	
<table class="table table-striped table-inverse table-responsive">
	<thead class="thead-inverse">
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
		</tr>
		</thead>
		<tbody>
			@if (count($cart_content)>0)
					@foreach ($cart_content as $item)
					<tr>
							<td scope="row">{{$item->name}}</td>
			
							<td>{{$item->price}}</td>
							<td>{{$item->qty}}</td>
						</tr>
						<tr>	
					@endforeach
			@endif

		</tbody>
</table>
	
	
	
				
	
					</div>
				</div>
			</div>
			<script>
			$(document).ready(function(){
				alert('jQuery is working here!');
			  });
			</script>
            @endsection