@extends('layouts.helloapp')
@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです</p>

  <table>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
    @endforeach
  </table>

  <p>必要なだけ記述できます</p>

  @component('components.message')
    @slot('msg_title')
    CAUTION!!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
    @endslot
  @endcomponent

  @include('components.message', ['msg_title'=>'OK', 'msg_content'=>'サブビューです。'])
@endsection

@section('footer')
copyright 2019 masa.
@endsection
