@extends('layouts.app')
@section('title', "タイピング|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">  
            <h1 class="typing-title">T Y P I N G</h1>
        </div>
        <p id="kana"></p>
        <p id="target">
            <span class="click" style="cursor: pointer">クリック！</span><br>
            <span class="text-small">※音が出ます</span>
        </p>
        <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $isMobile = preg_match('/iphone|ipod|ipad|android/ui', $user_agent);
        if ($isMobile) {
        ?>
        <p id="message" style="font-size: 1.1rem;"></p>
        <?php
        }
        ?>
        <p id="result"></p>
        <form method="POST" action="{{ route('result.edit', ['result' => $id]) }}">
            {{ csrf_field() }}
            <div id="button"></div>
        </form>
    </div>

    <?php $jsonArray = json_encode($data); ?>
    <script type="text/javascript">
        const words = JSON.parse('<?php echo $jsonArray ?>');
    </script>
@endsection
