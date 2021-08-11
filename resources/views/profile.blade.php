
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
    
      <hr>
	<div class="row justify-content-center">
      <div class="col-md-6">
        <form  method="POST">
        	@csrf
          <div class="form-group">
            <label>Name</label>
            <div>
              <input name="name" class="form-control" type="text" value="{{Auth::user()->name}}">
            </div>
          </div>
          <div class="form-group">
          	<label>Old Password</label>
            <div>
              <input name="oldpass" class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label>New Password</label>
            <div>
              <input name="newpass" class="form-control" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label>Re-Password</label>
            <div>
              <input name="repass" class="form-control" type="text" value="">
            </div>
          </div>
	      	<div class="form-group">
				<input type="submit" class="btn btn-danger" value="Update">
			</div>
        </form>
      </div>
  </div>
</div>
</body>
</html>