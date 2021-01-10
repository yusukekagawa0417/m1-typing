@extends('layouts.app')
@section('title', "タイピング|" . config('app.name'))
@section('content')
    <div class="container">
        <h1>タイピングページ</h1>
        <p id="target">Click to start!</p>
        <p id="result"></p>
    </div>
@endsection
