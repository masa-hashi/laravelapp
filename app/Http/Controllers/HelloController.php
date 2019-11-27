<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //index.
    public function index($id='noname', $pass='unknown') {

      $data = ['msg'=>'これはコントローラから渡されたメッセージです',
               'id'=>$id];

      return view('hello.index', $data);
    }
}
