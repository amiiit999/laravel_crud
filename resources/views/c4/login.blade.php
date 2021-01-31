<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container col-sm-5">
	
	<div class="card mt-5">
		@if(count($errors)>0)
      @foreach($errors->all() as $error)
         <div class="btn btn-danger">
         	{{$error}}
         </div>
      @endforeach
	@endif

	@if(session('lgnerror'))
      <div class="btn btn-warning">
      	{{session('lgnerror')}}
      </div>
	@endif

	@if(session('logout'))
      <div class="btn btn-warning">
      	{{session('logout')}}
      </div>
	@endif


		<div class="card-header"><strong>LOGIN FORM</strong></div>
		<div class="card-body">
			<form class="form" action="{{url('/lgnuser')}}"  enctype="multipart/form-data" method="post">
				{{ csrf_field() }}

				<div class="form-group">
					<label><strong>EMAIL : </strong></label>
					<input type="EMAIL" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label><strong>PASSWORD : </strong></label>
					<input type="PASSWORD" name="password" class="form-control">
				</div>
   
                  <button class="btn btn-info" type="submit"><strong>SIGN IN</strong></button><br><br>
                  <a href="{{url('/')}}" class="text-blue"> <strong>SIGN UP</strong></a>
			</form>
				
		</div>
	</div>
</div>
</body>
</html>