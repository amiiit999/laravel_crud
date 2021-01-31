<!DOCTYPE html>
<html>
<head>
	<title>Sign In Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-success">
       <div class="container col-sm-5">
       	<div class="card mt-5">
       		@if(count($errors)>0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                	{{$error}}
                </div>
              @endforeach
       		@endif

          @if(session('login'))
           <div class="alert alert-danger">
             {{session('login')}}
           </div>
          @endif

          @if(session('logout'))
           <div class="alert alert-danger">
             {{session('logout')}}
           </div>
          @endif


          @if(session('update'))
           <div class="alert alert-danger">
             {{session('update')}}
           </div>
          @endif
       		<div class="card-header"><strong>SIGN UP FORM</strong></div>
       		<div class="card-body">
       			<form class="form" action="{{url('/user_login')}}" method="post" enctype="multipart/form-data">
       				{{ csrf_field() }}
                      

                         <div class="form-group">
                        	<label><strong>EMAIL :</strong></label>
                        	<input type="Email" name="email" class="form-control">
                        </div>

                         <div class="form-group">
                        	<label><strong>PASSWORD :</strong></label>
                        	<input type="Password" name="password" class="form-control">
                        </div>

                         

                         <button class="btn btn-info" type="submit">Submit</button>
                         <br><br>
                         <a href="{{url('/')}}">Click Here to Sign Up</a>
       			</form>
       				
       		</div>
       	</div>
       </div>
</body>
</html>