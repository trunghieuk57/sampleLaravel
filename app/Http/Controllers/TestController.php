<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function check(Request $request)
    {
    	$data=[
    		'username'=>$request->username,
    		'password'=>$request->password,
    	];
    	if(Auth::attempt($data)){
    		return redirect('/home');
    	}else{
    		//false
    	}
    }
}