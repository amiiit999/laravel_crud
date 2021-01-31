<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
<div class="container col-sm-8">
	<div class="card mt-5">
		@if(session('add'))
           <div class="alert alert-success">
           	{{session('add')}}
           </div>
		@endif
		@if(session('update'))
           <div class="alert alert-success">
           	{{session('update')}}
           </div>
		@endif
		@if(session('delete'))
           <div class="alert alert-success">
           	{{session('delete')}}
           </div>
		@endif
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
						<th>EDIT:</th>
						<th>DELETE:</th>

					</tr>

					@if(count($view)>0)
                      @foreach($view->all() as $views)
                        <tr>
                        	<td>{{$views->id}}</td>
                        	<td>{{$views->user_name}}</td>
                        	<td>{{$views->user_email}}</td>
                        	<td>{{$views->user_password}}</td>
                        	<td><img src="{{$views->user_image}}" height="100px" width="100px"></td>
                        	<td>{{$views->user_city}}</td>
                        	<td><button class="btn btn-success"><a href="{{url('/')}}" class="text-white">Add</a></button></td>
                        	<td><button class="btn btn-info"><a href='{{url("edit/$views->id")}}' class="text-white">Edit</a></button></td>
                        
                        <td><button class="btn btn-danger"><a href='{{url("delete/$views->id")}}' class="text-white">Delete</a></button></td>
                        </tr>
                      @endforeach
                    
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>