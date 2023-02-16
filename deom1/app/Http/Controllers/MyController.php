<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function show()
    {
        return "Hello from My Controller";
    }
    function showname($name)
    {
        return $name;
    }
    function largest() {
        return view('if',["name"=>"esha"]);

    }
    function getdata(Request $r)
    {
       return $r->input();
    }
    public function register (Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'password'=>'required'
        ]
        );
    }

}