@extends('layouts.app')
@section('title', "結果一覧|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
        </div>
        <div class="box">
            <p class="speech-bubble">あなたの結果を登録しました！</p>
            <p>1位：笑い飯[2.3秒]</p>
            <p>2位：ブッフェ[5.9秒]</p>
            <p>3位：パンクブーブー[10.2秒]</p>
        </div>
        <div class="box">
            <div class="result-twitter">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large" data-text="結果｜{{ config('app.name') }}" data-url="https://google.co.jp">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="result-return-top">
                <a href="{{ url('/') }}" class="btn btn-solid-gold">◀︎ 再挑戦</a>
            </div>
        </div>
    </div>
@endsection
