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
        <td>Action</td>  
      </tr>

        @foreach($carts as $id => $details)
          <tr>
            <td>{{ $details->product->name }}</td> 
            <td class="row">
              <form action="/carts/{{ $details->product->id }}/minus" method="POST" class="mr-2">
                @csrf
                <input type="submit" class="btn btn-warning" value="-">
              </form>
             <span>{{ $details->count }}</span> 
              <form action="/carts/{{ $details->product->id }}/plus" method="POST" class="ml-2">
                @csrf
                <input type="submit" class="btn btn-warning" value="+">
              </form>
            </td>
            <td>{{ $details->product->price * $details->count }}</td>
        

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
    </table>
  </div>
</body>
</html>