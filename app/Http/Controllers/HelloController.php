<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    //index.
    public function index(Request $request)
    {
      $items = DB::select('select * from people');
      return view('hello.index', ['items'=> $items]);
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
