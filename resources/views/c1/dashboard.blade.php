<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">

	<div class="container">
		 @if(Session::has('token')))
		<div class="card mt-5">
           <div class="card-body">

			<table class="table">
				<tbody>
					<tr>
						<th>ID:</th>
						<th>FULL NAME:</th>
						<th>EMAIL:</th>
						<th>PASSWORD:</th>
	
						<th>CITY NAME:</th>
						<th>IMAGE:</th>
						<th>ADD:</th>
						<th>VIEW</th>
						
						<th>LOGOUT</th>
						

					</tr>
                      
                   
              @foreach(Session::get('token') as $token)
               <tr>
                         	<td>{{$token->id}}</td>
                         	<td>{{$token->user_name}}</td>
                         	<td>{{$token->user_email}}</td>
                         	<td>{{$token->user_password}}</td>
                         	<td>{{$token->user_city}}</td>
                         	<td><img src="{{$token->user_pic}}" height="100px" width="100px"></td>
                         	
                         	<td><a href="{{url('/')}}" class="text-white"><button class="btn btn-success">ADD</button></a></td>
                         	<td><a href="{{url('/display')}}" class="text-white"><button class="btn btn-info">View Users</button></a></td>
                         	<td><a href="{{url('/logout')}}" class="text-white"><button class="btn btn-danger">Logout</button></a></td>
                         </tr>

              @endforeach


			
                        
                      

				</tbody>
			</table>
			</div> 
		</div>
		

		@else

               <a href="{{url('/')}}">Sign Up Here</a>

	</div>
	@endif

</body>
</html>