<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth ;
use DB ;
use Illuminate\Contracts\Auth\Guard;

class LoginCtrl extends Controller
{

	/* Admin Function Auth */
    public function showAdminLogin()
    {   
        // dd(Auth::guard('admins')->check()) ;
    	if(Auth::guard('admins')->check() === true)
    	{
    		return redirect()->intended('admin');
     	}
		
        // This user is not logged in . return to login page 
		return view('admin.login') ;
    }

    public function postAdminLogin(Request $request)
    {
    	//dd($request->all() );
        $auth = Auth::guard('admins');
        $field = filter_var($request->input('email'), FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        $request->merge([$field => $request->input('email')]);
      
            //*return dd($auth->get()->id) ;
        if ($auth->attempt($request->only($field, 'password'),true))
        {   
           /* $info = Auth::guard('admins')->getUser() ;
            return dd($info->email);*/
            // To Get Any Info [ return dd(Auth::guard('admins')->user()->email) ; ]
            return redirect()->intended('admin');

        }else{
            return redirect()->back()->withErrors('اسم المستخدم او كلمه السر خطأ');
        }
    
    }


    public function getLogout()
    {   
        $auth = Auth::guard('admins') ;
        (!$auth->check() === false) ?$auth->logout() : "" ; 
        return redirect()->to(Url('/').'/admin') ;  
    }
	/* Admin Function Auth */



}

