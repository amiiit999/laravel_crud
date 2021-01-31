<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-warning">
	<div class="container col-sm-4">
		<div class="card mt-5">
			@if(count($errors)>0)
              @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                  	{{$error}}
                  </div>
              @endforeach
			@endif
         
         
			<div class="card-header"><h4>UPDATE FORM</h4></div>
			<div class="card-body">
				<form action='{{url("/update/{$edit->id}")}}' method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

                     <div class="form-group">
                     	<label><strong>Full Name:</strong></label>
                     	<input type="Text" name="name" class="form-control" value="{{$edit->user_name}}">
                     </div>

                     <div class="form-group">
                     	<label><strong>Email:</strong></label>
                     	<input type="Email" name="email" class="form-control" value="{{$edit->user_email}}">
                     </div>

                     <div class="form-group">
                     	<label><strong>Password:</strong></label>
                     	<input type="Text" name="password" class="form-control" value="{{$edit->user_password}}">
                     </div>
                     <div class="form-group">
                     	<label><strong>Image:</strong></label>
                     	<input type="File" name="img_file" class="form-control">
                     </div>

                     <div class="form-group">
                     	<label><strong>City Name:</strong></label>
                     	<input type="Text" name="city" class="form-control" value="{{$edit->user_city}}">
                     </div>

                     <button class="btn btn-warning" type="submit">Update</button>
                     <br><br>
                    <a href="{{url('/')}}">Back to home</a>

				</form>
			</div>
		</div>
	</div>

</body>
</html>