<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">

	<div class="conatiner">
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
						@if(count($view)>0)
                          @foreach($view->all() as $views)
                           <tr>
                           	 <th>{{$views->id}}</th>
                           	 <th>{{$views->user_name}}</th>
                           	 <th>{{$views->user_email}}</th>
                           	 <th>{{$views->user_password}}</th>
                           	 <th><img src="{{$views->user_pic}}" height="100px" width="100px"></th>
                           	 <th>{{$views->user_ciTY}}</th>

                           </tr>
                          @endforeach
						@endif
					</div>
				</table>
			</div>
		</div>
	</div>

</body>
</html>