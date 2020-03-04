<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('login');
    }

    public function store()
    {
    	if(Auth::attempt([
    		'username' => request()->username, 
    		'password' => request()->password
    	])) {
    		return redirect('/inventory');
    	}

    	return view('login')->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
