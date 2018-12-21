<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function welcome(Request $request)
    {
    	//return view('register-success');
    	return view('welcome');
    }

    public function registerSuccess(Request $request)
    {
    	return view('register-success');
    }

    
}
