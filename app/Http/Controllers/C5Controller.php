<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;

use App\c5model;
use Session;


class C5Controller extends Controller
{
    public function insert(Request $request){
    	$this->validate($request,[
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
         'image' => 'required',
         'city' => 'required',
    	]);
         
          $post = new c5model();
          $post->user_name = $request->input('name');
          $post->user_email = $request->input('email');
          $post->user_password = $request->input('password');
         
          if(Input::hasFile('image')){
          	$image = Input::file('image');
          	$image->move(public_path().'/image/',$image->getClientOriginalName());
          	$URL =URL::to("/").'/image/'.$image->getClientOriginalName();
          }
          $post->user_image= $URL; 
          
          $post->user_city = $request->input('city');
          $post->save();
          $data = $post;
          Session::push('token',$data);
    	return redirect('/profile')->with('profile','Welcome Friend');
    }

    public function view(){
    	$display = c5model::all();

    	return view('c5.display',['display'=>$display]);
    }  

    public function edit($id){
    	$edit = c5model::find($id);

    	return view('c5.edit',['edit'=>$edit]);
    }


    public function update(Request $request,$id){
    	$this->validate($request,[
         'name'=>'required',
         'email'=>'required',
         'password'=>'required',
         'image'=>'required',
         'city'=>'required'
    	]);

    	$update = c5model::find($id);
    	$update->user_name = $request->input('name');
    	$update->user_email = $request->input('email');
    	$update->user_password = $request->input('password');
    	
    	if(Input::hasFile('image')){
    		$image = Input::file('image');
    		$image->move(public_path().'/image/',$image->getClientOriginalName());
    		$url = URL::to("/").'/image/'.$image->getClientOriginalName();
    	}
    	$update->user_image = $url;
    	$update->user_city = $request->input('city');
    	$update->save();
    	Session::flush();
        
    	return redirect ('/login')->with('update','Data Updated Successfully');
    }

    public function delete($id){
       c5model::where('id',$id)->delete();
       return redirect ('/profile')->with('delete','User Deleted Successfully');
       
    }
 
    public function login_user(Request $request){

        $display=c5model::all();

    	$this->validate($request,[
         'email' => 'required',
         'password'=> 'required',
    	]);

    	$email = $request->input('email');
    	$password = $request->input('password');

    	$check = c5model::where('user_email',$email)->where('user_password',$password)->first();

    	if($check){
    		$data = $check;
    		Session::push('token',$data);
    		
    		return redirect('/profile')->with('profile','Welcome Friend');
    	}
    	else
    		return redirect('/login')->with('login','Either Entered Email or Password is Incorrect');
    }

    public function logout(){
    	Session::flush();
    	return redirect('/login')->with('logout','Logout Successfully');
    }

    public function profile(){
    	$display=c5model::all();
       return view('c5.profile',['display'=>$display]);
    }

}
