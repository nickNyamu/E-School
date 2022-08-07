<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct()
    //{
    //    $this->middleware('auth:admin');
    //}

    public function login(){
        return view('admin.login');
    }

    public function check(Request $request){
        $request -> validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ],[
            'email.exists'=>'The email does not exist'
        ]);

        $creds = $request->only('email', 'password');

        $auth = Auth::guard('admin');

        if($auth->check() && Auth::attempt($creds)){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail', 'Incorrect credentials');
        }


    }
}
