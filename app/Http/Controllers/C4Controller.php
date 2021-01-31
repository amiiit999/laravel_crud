<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use App\C4USERS;
use Session;
class C4Controller extends Controller
{
    
    public function add(Request $request){
    	$this->validate($request,[
         'name'=>'required',
          'email'=>'required',
           'password'=>'required',
            'image'=>'required',
            'city'=>'required',
           
    	]);

    	$post = new C4USERS();
    	$post->user_name = $request->input('name');
    	$post->user_email = $request->input('email');
    	$post->user_pass = $request->input('password');
    	$post->user_city = $request->input('city');
          
          if(input::hasFile('image')){
            $imagefile = Input::file('image'); 
            $imagefile->move(public_path().'/image',$imagefile->getClientOriginalName());
            $url=URL::to("/").'/image'.$imagefile->getClientOriginalName();

          }
          $post->image_file = $url;

    	$post->save();
    	return redirect('/display')->with('add','User Registred Successfully');
    }

    public function view(){
    	$view = C4USERS::all();

    	return view('c4.display',['view'=>$view]);
    }

    public function edit($id){
        $edit = C4USERS::find($id);
        return view('c4.edit',['edit'=>$edit]);
    }

    public function update(Request $request,$id){
        $this->validate($request,[
           'name' => 'required',
           'email' =>'required',
           'password'=>'required',
           'image'=>'required',
           'city'=>'required'

        ]);
         $update = C4USERS::find($id);
         $update->user_name = $request->input('name');
         $update->user_email = $request->input('email');
         $update->user_pass = $request->input('password');
         $update->user_city = $request->input('city');
         $update->save();
        return redirect('/display')->with('update','Data Updated Successfully');

    }
public function delete($id){
    C4USERS::where('id',$id)->delete();
    return redirect('/display')->with('delete','User deleted Successfully');
}

   public function login_user(Request $request){
       $this->validate($request,[
             'email'=>'required',
             'password'=>'required'
       ]);
           
         $email = $request->input('email');
         $password = $request->input('password');

         $check = C4USERS::where('user_email',$request->email)->where('user_pass',$request->password)->first();

         if($check){
            $data = $check;
             Session::push('token',$data);
             return redirect('/profile');
         }
         else
            return redirect('/login')->with('lgnerror','Either Entered Email or Password is Wrong');
   }

   public function logout(){
        Session::flush();
        return redirect ('/login')->with('logout','Logout Successfully');
   }




}


