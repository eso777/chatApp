<?php
use App\admin ;

/***************************************/
    /* Start Route Back End  */
/***************************************/

/* Login admin routes*/
Route::get('admin/login','LoginCtrl@showAdminLogin');
Route::post('admin/login','LoginCtrl@postAdminLogin');
Route::get('admin/logout','LoginCtrl@getLogout');

Route::Auth() ;
Route::resource('/','HomeController@index');
Route::group(['prefix' => 'admin','middleware'=>'AdminAuth'], function() {
/* Login admin routes*/
	
	Route::get('/', 'backEnd@index');
	Route::get('test',function(){
		return "Test Page Ok ok " ;
	});


});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/logout',function (){
    //Auth::guard('web')->logout();
    dd(Auth::guard('web')->check()) ;
});