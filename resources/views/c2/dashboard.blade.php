<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">

	<div class="container">
		@if(Session::has('token'))
            
		<div class="card">
			
			<div class="card-header">
				<table class="table">
					<tr>
						<th>ID:</th>
						<th>FULL NAME:</th>
						<th>EMAIL:</th>
						<th>PASSWORD:</th>
						<th>IMAGE:</th>
						<th>CITY NAME:</th>
						<th>ADD:</th>
						<th>EDIT:</th>
						<th>DELETE:</th>
					</tr>

					<div class="card-body">
						
                         @foreach(Session::get('token') as $token)
                           <tr>
                           	 <th>{{$token->id}}</th>
                           	 <th>{{$token->user_name}}</th>
                           	 <th>{{$token->user_email}}</th>
                           	 <th>{{$token->user_password}}</th>
                           	 <th><img src="{{$token->user_pic}}" height="100px" width="100px"></th>
                           	 <th>{{$token->user_city}}</th>
                              <th><a href="{{url('/logout')}}"><button class="btn btn-success">Logout</button></a></th>
                           </tr>
                        
						@endforeach
					</div>
				</table>
			</div>
		</div>
		@endif
	</div>

</body>
</html>