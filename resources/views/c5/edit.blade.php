<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">
       <div class="container col-sm-5">
       	<div class="card mt-5">
       		@if(count($errors)>0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                	{{$error}}
                </div>
              @endforeach
       		@endif
       		<div class="card-header"><strong>SIGN UP FORM</strong></div>
       		<div class="card-body">
       			<form class="form" action='{{url("/update/$edit->id")}}' method="post" enctype="multipart/form-data">
       				{{ csrf_field() }}
                        <div class="form-group">
                        	<label><strong>FULL NAME :</strong></label>
                        	<input type="Text" name="name" class="form-control" value="{{$edit->user_name}}">
                        </div>

                         <div class="form-group">
                        	<label><strong>EMAIL :</strong></label>
                        	<input type="Email" name="email" class="form-control" value="{{$edit->user_email}}">
                        </div>

                         <div class="form-group">
                        	<label><strong>PASSWORD :</strong></label>
                        	<input type="Text" name="password" class="form-control" value="{{$edit->user_password}}">
                        </div>

                         <div class="form-group">
                        	<label><strong>IMAGE :</strong></label>
                        	<input type="file" name="image" class="form-control" value="{{$edit->user_image}}">
                        </div>

                         <div class="form-group">
                        	<label><strong>CITY :</strong></label>
                        	<input type="Text" name="city" class="form-control" value="{{$edit->user_city}}">
                        </div>

                         <button class="btn btn-info" type="submit">Update</button>
                         <br><br>
                         <a href="{{url('/login')}}">Click Here to Sign In</a>
       			</form>
       				
       		</div>
       	</div>
       </div>
</body>
</html>