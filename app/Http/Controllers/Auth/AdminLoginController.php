<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
     public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
         return view('admin.login');
    }

    public function login(Request $request){
    	//validacija podataka
    		$this->validate($request,[
    			'email' => 'required|email',
    			'password' => 'required|min:6'
    		]);
    	//pokusaj logovanja
          if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
          	//ukoliko je uspesno redirektuj na index stranicu
              return redirect()->intended(route('admin.dashboard'));
          }
    	//ako nije uspeno vrati na login
         return redirect()->back()->withInput($request->only('email','remember'));
    	
    }

    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('/adm/login');
    }
}
