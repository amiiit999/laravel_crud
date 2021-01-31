<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-info">
   <div class="container">
   	

    <div class="card mt-5"></div>
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
       <div class="alert alert-danger">
       	  {{session('delete')}}
       </div>
 
   	@endif
<table class="table">
   	
   		
   			<tr class="table" >
   				<th>USER ID</th>
   				<th>USER NAME</th>
   				<th>USER EMAIL</th>
   				<th>USER PASSWORD</th>
   				<th>USER CITY</th>
   				<th>USER IMAGE</th>
   				<th>EDIT</th>
   				<th>DELETE</th>
   			</tr>
   			
   				@if(count($view)>0)
   			   @foreach($view->all() as $views)
   			   <tr class="table">
   				<td>{{$views->id}}</td>
   				<td>{{$views->user_name}}</td>
   				<td>{{$views->user_email}}</td>
   				<td>{{$views->user_pass}}</td>
   				<td>{{$views->user_city}}</td>
   				<td><img src="{{$views->image_file}}" height="100px" width="100px"></td>
   				<td><button class="btn btn-info" ><a href='{{url("edit/$views->id")}}' class="text-white">EDIT</a></button></td>
   				<td><button class="btn btn-danger" ><a href='{{url("delete/$views->id")}}' class="text-white">DELETE</a></button></td>
   				</tr>
   				@endforeach
   				@endif
   			
   		
   </table>
</div>
<center><button class="btn btn-warning"><a href="{{url('/')}}" class="text-white"><strong> Sign Up</strong></a></button></center>
   </div>
</body>
</html>