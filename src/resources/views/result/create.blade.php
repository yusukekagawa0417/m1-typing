@extends('layouts.app')
@section('title', "結果登録|" . config('app.name'))
@section('content')
    <div class="container">
        <h1>結果登録ページ</h1>
        <div>
            <p>1位：笑い飯[2.3秒]</p>
            <p>2位：あなた[5.9秒]</p>
            <p>3位：パンクブーブー[10.2秒]</p>
        </div>
        <p>あなたは2位でした！</p>
        <div>twitter共有</div>
        <p>順位を保存しますか？</p>
        <form method="POST" action="{{ route('result.store') }}">
            {{ csrf_field() }}
            <label id="name">名前</label>
            <input id="name"
                   class="name"
                   value="{{ old('name') }}"
                   required>
            <button tyoe="submit">保存</button>
        </form>
        <a href="/">保存せずに再チャレンジ</a>
    </div>
@endsection
