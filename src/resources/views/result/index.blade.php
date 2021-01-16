@extends('layouts.app')
@section('title', "結果一覧|" . config('app.name'))
@section('content')
    <div class="container">
        <h1>結果一覧ページ</h1>
        <div>
            <p>1位：笑い飯[2.3秒]</p>
            <p>2位：ブッフェ[5.9秒]</p>
            <p>3位：パンクブーブー[10.2秒]</p>
        </div>
        <div>twitter共有</div>
        <a href="/">再チャレンジ</a>
    </div>
@endsection
