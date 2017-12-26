<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleController extends Controller{
    public function getForm(){
        return view('test');
    }
    public function handleRequest(Request $request){
        return $request->all();
    }
}
