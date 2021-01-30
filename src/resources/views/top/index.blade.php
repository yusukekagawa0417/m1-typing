@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            @include('shared.top-title')
        </div>
        <div class="box">
            <h2 class="top-description">
                年に一度の漫才頂上決戦M1グランプリ。<br>
                歴戦のワードが今ここに結集！<br>
                チャンピオン目指して画面に表示される文字たちを<br>
                一秒でも早くタイプしろ！！！
            </h2>
        </div>
        <div class="box">
            <a href="{{ route('typing.show', ['typing' => '1']) }}" class="btn btn-solid-gold">easy</a>
            </a>
            <a href="{{ route('typing.show', ['typing' => '2']) }}" class="btn btn-solid-gold">hard</a>
            </a>
        </div>
    </div>
@endsection
