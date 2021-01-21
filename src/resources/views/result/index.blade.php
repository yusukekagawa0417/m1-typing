@extends('layouts.app')
@section('title', "結果一覧|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
        </div>
        <div class="box">
            <p class="speech-bubble">あなたの結果を登録しました！</p>
            <table class="table-top">
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>笑い飯</td>
                        <td>2.3秒</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ブッフェ</td>
                        <td>5.9秒</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>パンクブーブー</td>
                        <td>10.2秒</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-sub">
                <tbody>
                    <tr>
                        <td>4</td>
                        <td>笑い飯</td>
                        <td>2.3秒</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>ブッフェ</td>
                        <td>5.9秒</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>パンクブーブー</td>
                        <td>10.2秒</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>笑い飯</td>
                        <td>2.3秒</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>ブッフェ</td>
                        <td>5.9秒</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>パンクブーブー</td>
                        <td>10.2秒</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>パンクブーブー</td>
                        <td>10.2秒</td>
                    </tr>
                </tbody>
            </table>
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
