<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">
   <div class="container">
   	<div class="card">
   		@if(session('display'))
           <div class="alert alert-success">
           	   {{session('display')}}
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
   		<div class="header">
   			<table class="table">
   				<tbody>
   					<tr>
   						<th>ID :</th>
   						<th>NAME : </th>
   						<th>EMAIL : </th>
   						<th>PASSWORD :</th>
   						<th>IMAGE :</th>
   						<th>CITY :</th>
   						<th>EDIT :</th>
   						<th>DELETE :</th>
   					</tr>

   					@if(count($display)>0)
                      @foreach($display->all() as $view)
                      <tr>
                        <td>{{$view->id}}</td>
                        <td>{{$view->user_name}}</td>
                        <td>{{$view->user_email}}</td>
                        <td>{{$view->user_password}}</td>
                        <td><img src="{{$view->user_image}}" height="100px" width="100px"></td>
                        <td>{{$view->user_city}}</td>
                        <td><button class="btn btn-success"><a href='{{url("/edit/$view->id")}}' class="text-white">EDIT</a></button></td>
                        <td><button class="btn btn-danger"><a href='{{url("/delete/$view->id")}}' class="text-white">DELETE</a></button></td>
                      @endforeach
   					@endif
   					</tr>
   				</tbody>

   			</table>
   			<center><button class="btn btn-info"><a href="{{url('/')}}" class="text-white">Add</a></button></center>
   		</div>
   	</div>
   </div>
</body>
</html>