@extends('layouts.app')
@section('title', "タイピング|" . config('app.name'))
@section('content')
    <div class="container">
        <h1>タイピングページ</h1>
        <p id="kana"></p>
        <p id="target">Click to start!</p>
        <p id="result"></p>
        <div id="button"></div>
    </div>

    <?php $jsonArray = json_encode($data); ?>
    <script type="text/javascript">
        const words = JSON.parse('<?php echo $jsonArray ?>');
    </script>
@endsection
