<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">
	<div class="container col-sm-5">
		<div class="card mt-4">
			<div class="card-header"><strong>UPDATE FORM</strong></div>
			<div class="card-body">
				<form class="form" action='{{url("update/$edit->id")}}' method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label><strong>FULL NAME</strong></label>
						<input type="Text" name="name" class="form-control" value="{{$edit->user_name}}">
					</div>

					<div class="form-group">
						<label><strong>EMAIL</strong></label>
						<input type="Email" name="email" class="form-control" value="{{$edit->user_email}}">
					</div>
                     
                     <div class="form-group">
						<label><strong>PASSWORD</strong></label>
						<input type="Text" name="password" class="form-control" value="{{$edit->user_pass}}">
					</div>

					<div class="form-group">
						<label><strong>CITY</strong></label>
						<input type="text" name="city" class="form-control" value="{{$edit->user_city}}">
					</div>

                    <button class="btn btn-success" type="submit"><strong>SUBMIT</strong></button>

				</form>
					
			</div>
		</div> 
	</div>

</body>
</html>