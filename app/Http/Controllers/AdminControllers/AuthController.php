<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

    public function loginForm(){
        return view('admin.auth.login');
    }


    public function login(Request $request)
    {
        if(!Auth::guard('admin')->attempt(["email"=>$request->email,"password"=>$request->password])){
return redirect()->back()->withErrors("These credentials do not match our records.");
        }

        return redirect()->back();
    }


    public function logout(){
        Session::flush();

        Auth::guard('admin')->logout();

        return redirect()->route('admin.auth.login');
    }
}