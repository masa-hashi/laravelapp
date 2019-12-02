<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    //index.
    public function index(Request $request)
    {
      if ($request->hasCookie('msg'))
      {
        $msg = 'Cookie: ' . $request->cookie('msg');
      } else {
        $msg = 'クッキーはありません';
      }
      return view('hello.index', ['msg'=> $msg]);
    }

    //POST
    public function post(Request $request)
    {
      $validate_rule = [
        'msg' => 'required',
      ];
      $this->validate($request, $validate_rule);
      $msg = $request->msg;
      $response = new Response(View('hello.index', ['msg'=>'「' . $msg . '」をクッキー保存しました']));
      $response->cookie('msg', $msg, 100);
      return $response;
    }
}
