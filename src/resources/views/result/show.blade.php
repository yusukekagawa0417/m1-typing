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
                    @foreach ($result as $key => $value)
                        @if ($key + 1 <= 3)
                            <tr style="font-size: 2.5rem;">
                                <td bgcolor="yellow">{{ $key + 1 }}</td>
                                <td><font color="orange">{{ $value['name'] }}</font></td>
                                <td bgcolor="yellow">{{ $value['time'] }}秒</td>
                            </tr>
                        @elseif ($key + 1 <= 10)
                            <tr>
                                <td bgcolor="white"><font color="blue">{{ $key + 1 }}</td>
                                <td><font color="orange">{{ $value['name'] }}</font></td>
                                <td bgcolor="white"><font color="blue">{{ $value['time'] }}秒</td>
                            </tr>
                        @endif
                    @endforeach 
                </tbody>
            </table>
        </div>
        <div class="box">
            <div class="result-twitter">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"
                    class="twitter-share-button"
                    data-show-count="false"
                    data-size="large"
                    data-text="あなたは決勝進出、見事{{ $number }}位でした！｜{{ config('app.name') }}"
                    data-hashtags="M1グ打ンプリ"
                    data-url="https://m1-typing.com/">
                        Tweet
                </a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="result-return-top">
                <a href="{{ url('/') }}" class="btn btn-solid-gold">◀︎ 再挑戦</a>
            </div>
        </div>
    </div>
@endsection
