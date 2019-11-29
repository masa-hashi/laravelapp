<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //index.
    public function index(Request $request) {
      return view('hello.index', ['data'=>$request->data]);
      //return view('hello.index', ['message'=>'Hello!']);

    }

    //POST
    public function post(Request $request) {
      return view('hello.index', ['msg'=>$request->msg]);
    }
}
