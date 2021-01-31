<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use App\C3USERS;
use Session;

class C3Cotroller extends Controller
{
    public function add(Request $request){
    	$this->validate($request,[
         'name'=>'required',
         'email'=>'required',
         'password'=>'required',
         'image'=>'required',
         'city'=>'required'
    	]);

    	$post = new C3USERS();
    	$post->user_name = $request->input('name');
    	$post->user_email = $request->input('email');
    	$post->user_password = $request->input('password');
    	 
    	 if(Input::hasFile('image')){
    	 	$file=Input::file('image');
    	 	$file->move(public_path().'/image',$file->getClientOriginalName());
    	 	$url=URL::to("/").'/image/'.$file->getClientOriginalName();
    	 }
    	   $post->user_image= $url;

    	$post->user_city = $request->input('city');
    	$post->save();

    	return redirect('/display')->with('add','Signed Up Successfully');
    }

    public function view(){
    	$view = C3USERS::all();

    	return view('c3.display',['view'=>$view]);
    }

    public function lgnuser(Request $request){
    	$this->validate($request,[
        
         'email'=>'required',
         'password'=>'required'
         
    	]);

          $email=$request->input('email');
          $password=$request->input('password');
           
          $check = C3USERS::where('user_email',$request->email)->where('user_password',$request->password)->first();
          
          if($check){
          	$data = $check;
          	Session::push('token',$data);
          	return redirect('/dashboard');
          } 

          else
          	return redirect('/login')->with('lgn','Entered Email or Password is wrong');
    }

    public function logout(){
    	Session::flush();

    	return redirect('/login')->with('logout','Logout Successfully');
    }
    public function edit($id){
    	$edit = C3USERS::find($id);

    	return view('c3.edit',['edit'=>$edit]);
    }

    public function update(Request $request,$id){
    	$this->validate($request,[
         'name'=>'required',
         'email'=>'required',
         'password'=>'required',
         'image'=>'required',
         'city'=>'required'
    	]);
    	$update = C3USERS::find($id);
    	$update->user_name = $request->input('name');
    	$update->user_email = $request->input('email');
    	$update->user_password = $request->input('password');
    	 
    	 if(Input::hasFile('image')){
    	 	$file=Input::file('image');
    	 	$file->move(public_path().'/image',$file->getClientOriginalName());
    	 	$url=URL::to("/").'/image/'.$file->getClientOriginalName();
    	 }
    	   $update->user_image= $url;

    	$update->user_city = $request->input('city');
    	$update->save();

    	return redirect('/display')->with('update','Updated Successfully');
    }
    public function delete($id){
    	C3USERS::where('id',$id)->delete();

    	return redirect('/display')->with('delete','User Deleted Successfully');
    }
}
