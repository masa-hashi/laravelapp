<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class HelloController extends Controller
{
    //index.
    public function index(Request $request) {
      return view('hello.index', ['msg'=>'フォームを入力：']);
      //return view('hello.index', ['message'=>'Hello!']);

    }

    //POST
    public function post(Request $request) {

      $messages = [
        'name.required' => '名前は必須です。'
      ];

      $validator = Validator::make($request->all(), [
        'name' => 'required',
        'mail' => 'email',
        'age'  => 'numeric|between:0,150',
      ], $messages);

      $validator->sometimes('age', 'min:0', function($input){
        return !is_int($input->age);
      });

      $validator->sometimes('age', 'max:200', function($input){
        return !is_int($input->age);
      });

      if ($validator->fails()) {
        return redirect('/hello')
                        ->withErrors($validator)
                        ->withInput();
      }
      return view('hello.index', ['msg'=>'Is Corrected!']);
    }
}
