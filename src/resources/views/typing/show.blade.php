@extends('layouts.app')
@section('title', "タイピング|" . config('app.name'))
@section('content')
    <div class="container">
        <div class="box">  
            <h1 class="typing-title">T Y P I N G</h1>
        </div>
        <p id="kana"></p>
        <p id="target">
            クリック！<br>
            <span class="text-small">※音が出ます</span>
        </p>
        <p id="result"></p>
        <div id="button"></div>
    </div>

    <?php $jsonArray = json_encode($data); ?>
    <script type="text/javascript">
        const words = JSON.parse('<?php echo $jsonArray ?>');
    </script>
@endsection
