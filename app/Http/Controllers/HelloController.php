<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    //index.
    public function index(Request $request) {
      return view('hello.index', ['msg'=>'フォームを入力：']);
      //return view('hello.index', ['message'=>'Hello!']);

    }

    //POST
    public function post(HelloRequest $request) {
      return view('hello.index', ['msg'=>'Is Corrected!']);
    }
}
