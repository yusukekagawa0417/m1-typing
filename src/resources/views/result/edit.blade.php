@extends('layouts.app')
@section('title', "結果登録|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="result-title">J　U　D　G　E</h1>
        </div>
        <div class="box">
            <p class="result-description">
                @if (empty($number))
                    残念、あなたは準決勝敗退でした...
                @else
                    あなたは決勝進出、見事{{ $number }}位でした！
                @endif
            </p>
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
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false" data-size="large" data-text="結果｜{{ config('app.name') }}" data-url="https://google.co.jp">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        @if (!empty($number))
        <div class="box">
            <p class="speech-bubble">順位を保存しますか？</p>
            <form method="POST" action="{{ route('result.update', ['result' => $id]) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <input id="name"
                       name="name"
                       value="{{ old('name') }}"
                       placeholder="あなたの名前"
                       maxlength="10"
                       type="text"
                       required
                       style="width: 200px;">
                <button type="submit" class="input-submit">保存</button>
            </form>
        </div>
        @endif
        <div class="result-return-top">
            <a href="{{ url('/') }}" class="btn btn-solid-gold">◀︎ 再挑戦</a>
        </div>
    </div>
@endsection
