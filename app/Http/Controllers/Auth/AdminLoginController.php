<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.admin.login');
    }

    public function login(LoginRequest $request){
        //attempt to login the user
        if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
            //if successfull redirect to intended location
            return redirect()->route('admin.dashboard');
        }
        //if unsuccessful return redirect back to login with form data
        return redirect()->back()->withInput($request->only(['email','remember']));
    }
}
