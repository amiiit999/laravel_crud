<?php
/*
Route::get('/', function () {
    return view('c1.index');
});
Route::get('/login',function(){
	return view('c1.login');
});

Route::get('/dashboard',function(){
	return view('c1.dashboard');
});
Route::post('/insert','C1Controller@add');
Route::get('/display','C1Controller@view');
Route::post('/loginuser','C1Controller@login');
Route::get('/logout','C1Controller@logout');
Route::get('/edit/{id}','C1Controller@edit');
Route::post('/update/{id}','C1Controller@update');
Route::get('/delete/{id}','C1Controller@delete');
*/

	/* Route::get('/',function(){
		return view('c3.index');	
	});
	Route::post('/insert','C3Cotroller@add');
	Route::get('/display','C3Cotroller@view');
	Route::get('/login',function(){
		return view('c3.login');
	});
	Route::post('/loginuser','C3Cotroller@lgnuser');
	Route::get('/logout','C3Cotroller@logout');
	Route::get('/dashboard',function(){
		return view('c3.dashboard');
	});
Route::get('/edit/{id}','C3Cotroller@edit');
Route::get('/edituser',function(){
	return view('c3.edit');
});
Route::post('update/{id}','C3Cotroller@update');
Route::get('delete/{id}','C3Cotroller@delete');  */

/*Route::get('/',function(){
	 return view('c4.index');
});

Route::post('/insert','C4Controller@add');
Route::get('/display','C4Controller@view');
Route::get('/edit/{id}','C4Controller@edit');
Route::post('/update/{id}','C4Controller@update');
Route::get('/delete/{id}','C4Controller@delete');
Route::post('/lgnuser','C4Controller@login_user');
Route::get('/profile',function(){
	return view('c4.profile');
});

Route::get('/logout','C4Controller@logout');

Route::get('login',function(){
	return view('c4.login');
	

}); */


  Route::get('/',function(){
	return view('c5.index');
});

Route::post('/insert','C5Controller@insert');
Route::get('/display','C5Controller@view');
Route::get('/edit/{id}','C5Controller@edit');
Route::post('/update/{id}','C5Controller@update');
Route::get('/delete/{id}','C5Controller@delete');
Route::get('/login',function(){
     return view('c5.login');
});
Route::post('/user_login','C5Controller@login_user');
Route::get('/profile','C5Controller@profile');
Route::get('/logout','C5Controller@logout'); 


