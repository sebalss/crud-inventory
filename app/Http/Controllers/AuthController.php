<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
