<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">

		@auth
			<a href="/products/create">New</a>	
		@endauth

		<table class="table">
			<tr>
				<td>#</td>  
				<td>Name</td>  
				<td>Count</td>  
				<td>Price</td>  
				<td>Action</td>  
			</tr>

			

			@foreach($products as $key => $product)	
			<tr>
				<td>{{ $key + 1 }}</td>  <!-- amen angam echo chgrelu hamar " { { } } " -->
				{{-- @php 
					$num++;
				@endphp  --}}
				<td>{{ $product->name }}</td>  <!-- amen angam echo chgrelu hamar " { { } } " -->
				<td>{{ $product->count }}</td>
				<td>{{ $product->price }}</td>
				
				<td class="row">
					<a href="/products/edit/{{ $product->id }}" class="btn btn-warning mr-2">Edit</a>
					<form action="/products/destroy/{{ $product->id }}" method="POST" class="mr-2">
						@csrf
						<input type="submit" class="btn btn-danger" value="Delete">
					</form>
					<form action="/products/show/{{ $product->id }}" method="POST">
						@csrf
						<input type="submit" class="btn btn-danger" value="Show">
					</form>
				</td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>