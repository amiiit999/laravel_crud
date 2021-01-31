<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
	<div class="container col-sm-4">
		<div class="card mt-5">
			@if(count($errors)>0)
              @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                  	{{$error}}
                  </div>
              @endforeach
			@endif


			<div class="card-header"><h4>SIGN UP FORM</h4></div>
			<div class="card-body">
				<form action="{{url('/insert')}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

                     <div class="form-group">
                     	<label><strong>Full Name:</strong></label>
                     	<input type="Text" name="name" class="form-control">
                     </div>

                     <div class="form-group">
                     	<label><strong>Email:</strong></label>
                     	<input type="Email" name="email" class="form-control">
                     </div>

                     <div class="form-group">
                     	<label><strong>Password:</strong></label>
                     	<input type="Password" name="password" class="form-control">
                     </div>
                     <div class="form-group">
                     	<label><strong>Image:</strong></label>
                     	<input type="File" name="img_file" class="form-control">
                     </div>

                     <div class="form-group">
                     	<label><strong>City Name:</strong></label>
                     	<input type="Text" name="city" class="form-control">
                     </div>

                     <button class="btn btn-info" type="submit">submit</button>
                      <br><br>
                     <a href="{{url('/login')}}">Sign In Here</a>

				</form>
			</div>
		</div>
	</div>

</body>
</html>