<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-danger">
<div class="container col-sm-4">
	<div class="card mt-5">
		@if(count($errors)>0)
         @foreach($errors->all() as $error)
           <div class="alert alert-danger">
           	 {{$error}}
           </div>
         @endforeach
		@endif

		@if(session('lgn'))
          <div class="btn btn-info">
          	{{session('lgn')}}
          </div>
		@endif
		@if(session('logout'))
          <div class="btn btn-success">
          	{{session('logout')}}
          </div>
		@endif
		<div class="card-header"><strong>LOG IN FORM</strong></div>
		<div class="card-body">
			<form class="form" action="{{url('/loginuser')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

				

				<div class="form-group">
					<label><strong>EMAIL:</strong></label>
					<input type="email" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label><strong>PASSWORD:</strong></label>
					<input type="Password" name="password" class="form-control">
				</div>

				
      
                <button class="btn btn-success" type="submit"><strong>Log In</strong></button>
                <br>
                <br>
                <a href="{{url('/')}}">Click here Sign Up</a>
			</form>
		</div>
	</div>
</div>
</body>
</html>