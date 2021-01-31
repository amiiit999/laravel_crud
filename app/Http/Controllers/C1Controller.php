<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Session;
use App\C1User;


class C1Controller extends Controller
{
    public function add(Request $request){
    	$this->validate($request,[
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required',
          'img_file'=>'required',
          'city'=>'required'
    	]);

          $add = new C1User;
          $add->user_name = $request->input('name');
          $add->user_email = $request->input('email');
          $add->user_password = $request->input('password');

          if(Input::hasFile('img_file')){
          	$file=Input::file('img_file');
          	$file->move(public_path().'/photo',$file->getClientOriginalName());
          	$url=URL::to("/").'/photo/'.$file->getClientOriginalName();
          }
          $add->user_pic=$url;
          $add->user_city=$request->input('city');
          $add->save();

          return redirect('/display')->with('add','Registration Complated Successfully');

    }

    public function view(){
    	$show = C1User::all();

    	return view('c1.display',['show'=>$show]);
    }

    public function login(Request $request){
    	$this->validate($request,[
          'email'=>'required|email',
          'password'=>'required', 
    	]);

    	$email=$request->input('email');
    	$password=$request->input('password');
          
           $check=C1User::where('user_email',$request->email)->where('user_password',$request->password)->first();
    	if($check){
           $data = $check;

           Session::push('token',$data);

           return redirect('/dashboard');
    	}
    	else
    		return redirect('/login')->with('lgnf','Entered Email or Password is Wrong');
    }

    public function logout(){
    	Session::flush();

    	return redirect('/login')->with('logout','Logout Successfully');
    }

    public function edit($id){
    	$edit = C1User::find($id);
           
    	return view('c1.edit',['edit'=>$edit]);
    }

    public function update(Request $request,$id){
    $this->validate($request,[
          'name'=>'required',
          'email'=>'required|email',
          'password'=>'required',
          'img_file'=>'required',
          'city'=>'required'
    	]);

          $add = C1User::find($id);
          $add->user_name = $request->input('name');
          $add->user_email = $request->input('email');
          $add->user_password = $request->input('password');

          if(Input::hasFile('img_file')){
          	$file=Input::file('img_file');
          	$file->move(public_path().'/photo',$file->getClientOriginalName());
          	$url=URL::to("/").'/photo/'.$file->getClientOriginalName();
          }
          $add->user_pic=$url;
          $add->user_city=$request->input('city');
          $add->save();

          return redirect('/display')->with('update','Updated Successfully');	

    }

    public function delete($id){
    	C1User::where('id',$id)->delete();

    	return redirect('/display')->with('delete','User Deleted Successfully');
    }
}
