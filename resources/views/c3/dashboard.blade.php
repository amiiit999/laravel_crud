<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
	@if(Session::has('token'))
<div class="container col-sm-8">
	<div class="card mt-5">
	
		<div class="table">
			<table class="table">
				<tbody>
					<tr>
						<th>ID:</th>
						<th>FULL NAME:</th>
						<th>EMAIL:</th>
						<th>PASSWORD:</th>
						<th>IMAGE FILE:</th>
						<th>CITY NAME:</th>
						<th>ADD:</th>
						<th>LOGOUT:</th>
						<th>REGISTRED USERS:</th>
					</tr>

					  @foreach(Session::get('token') as $data)
                        <tr>

                        	<td>{{$data->id}}</td>
                        	<td>{{$data->user_name}}</td>
                        	<td>{{$data->user_email}}</td>
                        	<td>{{$data->user_password}}</td>
                        	<td><img src="{{$data->user_image}}" height="100px" width="100px"></td>
                        	<td>{{$data->user_city}}</td>
                        	<td><button class="btn btn-success"><a href="{{url('/')}}" class="text-white">Add</a></button></td>
                        	<td><button class="btn btn-danger"><a href="{{url('/logout')}}" class="text-white">logout</a></button></td>
                        	<td><button class="btn btn-info"><a href="{{url('/display')}}" class="text-white">Registred Users</a></button></td>
                        </tr>
                     @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@else
<a href="{{url('/login')}}" class="text-white">Login Here</a>
@endif

</body>
</html>