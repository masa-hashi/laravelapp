<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //index.
    public function index() {
      $data = [
        ['name'=>'山田花子', 'mail'=>'hanako@ko.co.jp'],
        ['name'=>'岡田ゆん個', 'mail'=>'hoge@ko.co.jp'],
        ['name'=>'レモン食べ太', 'mail'=>'koko@ko.co.jp']
      ];

      //return view('hello.index', ['data'=>$data]);
      return view('hello.index', ['message'=>'Hello!']);

    }

    //POST
    public function post(Request $request) {
      return view('hello.index', ['msg'=>$request->msg]);
    }
}
