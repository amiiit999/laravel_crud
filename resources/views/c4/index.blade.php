<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
	<div class="container col-sm-5">
		@if(count($errors)>0)
		@foreach($errors->all() as $error)
       <div class="alert alert-danger">
       	  {{$error}}
       </div>
       @endforeach
		@endif
		<div class="card mt-4">
			<div class="card-header"><strong>SIGN UP FORM</strong></div>
			<div class="card-body">
				<form class="form" action="{{url('/insert')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label><strong>Full Name</strong></label>
						<input type="Text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label><strong>Email</strong></label>
						<input type="Email" name="email" class="form-control">
					</div>
                     
                     <div class="form-group">
						<label><strong>Password</strong></label>
						<input type="Password" name="password" class="form-control">
					</div>
                      
                     <div class="form-group">
                     	<label><strong>IMAGE : </strong></label>
                     	<input type="file" name="image" class="form-control">
                     </div> 

					<div class="form-group">
						<label><strong>City</strong></label>
						<input type="text" name="city" class="form-control">
					</div>

                    <button class="btn btn-success" type="submit"><strong>SUBMIT</strong></button>
                    <br>
                    <center><p>NEW USER</p><button class="btn btn-info"><a href="{{url('login')}}" class="text-white">SIGN IN</a></button></center>

				</form>
					
			</div>
		</div> 
	</div>

</body>
</html>