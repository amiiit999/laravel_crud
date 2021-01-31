<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">
	<div class="container col-sm-4">
		<div class="card mt-5">
         @if(session('lgnf'))
           <div class="btn btn-danger">
              {{session('lgnf')}}
           </div>
         @endif
			@if(count($errors)>0)
              @foreach($errors->all() as $error)
                  <div class="alert alert-danger">
                  	{{$error}}
                  </div>
              @endforeach
			@endif
         @if(session('logout'))
              <div class="alert alert-success">
               {{session('logout')}}
              </div>
         @endif

			<div class="card-header"><h4>Login FORM</h4></div>
			<div class="card-body">
				<form action="{{url('/loginuser')}}" method="POST" >
					{{ csrf_field() }}

                     

                     <div class="form-group">
                     	<label><strong>Email:</strong></label>
                     	<input type="Email" name="email" class="form-control">
                     </div>

                     <div class="form-group">
                     	<label><strong>Password:</strong></label>
                     	<input type="Password" name="password" class="form-control">
                     </div>
                     

                     <button class="btn btn-success" type="submit">Login</button>

                     <br><br>
                     <a href="{{url('/')}}">Sign Up Here</a>

				</form>
			</div>
		</div>
	</div>

</body>
</html>