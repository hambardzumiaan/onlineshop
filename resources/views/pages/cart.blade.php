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
        <td>Quantity</td>  
        <td>Action</td>  
      </tr>

     @if(session('cart'))
        @foreach(session('cart') as $id => $details)
          <tr>
            <td>{{ $details['name'] }}</td> 
            <td>{{ $details['price'] }}</td>
            <td>{{ $details['count'] }}</td>
            <td style="width: 10%;">
              <input rowId="{{ $id }}" type="number" value="{{ $details['quantity'] }}" style="width: 70%; text-align: center;" required>

            </td>

             <td class="row">
              <form action="/carts/destroy/{{ $id }}" method="POST" class="mr-2">
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
              </form>
               <form action="/histories" method="POST" class="mr-2">
                @csrf
                <input type="submit" class="btn btn-warning" value="Buy">
              </form>
            </td>
           </tr> 
        @endforeach
      @endif
    </table>
  </div>
</body>
</html>