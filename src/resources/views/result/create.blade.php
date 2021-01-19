@extends('layouts.app')
@section('title', "結果登録|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
        </div>
        <div class="box">
            <p>1位：笑い飯[2.3秒]</p>
            <p>2位：あなた[5.9秒]</p>
            <p>3位：パンクブーブー[10.2秒]</p>
        </div>
        <div class="box">
            <p>あなたは2位でした！</p>
            <div class="result-twitter">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large" data-text="結果｜{{ config('app.name') }}" data-url="https://google.co.jp">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="box">
            <p>順位を保存しますか？</p>
            <form method="POST" action="{{ route('result.store') }}">
                {{ csrf_field() }}
                <input id="name"
                       class="name"
                       value="{{ old('name') }}"
                       placeholder="あなたの名前"
                       required>
                <button tyoe="submit">保存</button>
            </form>
        </div>
        <div class="result-return-top">
            <a href="{{ url('/') }}" class="btn btn-solid-gold">◀︎ 再挑戦</a>
        </div>
    </div>
@endsection
