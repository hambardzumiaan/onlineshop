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


    <table class="table">
      <tr>
        <td>Name</td>  
        <td>Count</td>  
        <td>Price</td>  
 
      </tr>

        @foreach($carts as $id => $details)
          	<tr>
	            <td>{{ $details->product->name }}</td> 
	            <td>{{ $details->count }}</td>
	            <td>{{ $details->product->price * $details->count }}</td>   
       		</tr> 
        @endforeach
    </table>
  </div>
</body>
</html>