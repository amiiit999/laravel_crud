<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\c2users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Session;

class C2Controller extends Controller
{
  
public function add(Request $request){

	$this->validate($request,[
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
      'image_name' => 'required',
      'city' => 'required'
	]);

	$post = new c2users();
	$post->user_name = $request->input('name');
	$post->user_email = $request->input('email');
	$post->user_password = $request->input('password');

	if(Input::hasFile('image_name')){
		$file = Input::file('image_name');
		$file->move(public_path().'/image',$file->getClientOriginalName());
		$url = URL::to("/").'/image/'.$file->getClientOriginalName();
	}

	$post->user_pic =$url;
	$post->user_city = $request->input('city');
	$post->save();

	return redirect('/display')->with('add','Registration Complated Successfully');
}

  public function view(){
  	   $view = c2users::all();

  	   return view('c2.display',['view'=>$view]);
  }
   
   public function check(Request $request){

	$this->validate($request,[  
      'email' => 'required',
      'password' => 'required',
	]);
    
     $email =$request->input('email');
     $password =$request->input('password');

     $lgn=c2users::where('user_email',$request->email)->where('user_password',$request->password)->first();
     if($lgn){
     	$data = $lgn;
     	session::push('token',$data);
     	return redirect('/dashboard');
     } 
      else
      	return redirect('/login')->with('login','Either Email or Password Entered Wrong');
   }

   public function logout(){
   	    Session::flush();

   	    return redirect('/login')->with('logout','Logout Succesfully');
   }
}
