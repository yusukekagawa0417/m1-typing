@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div class="container">
        <h1>TOPページ</h1>
        <div>
            <a href="{{ route('typing.show', ['typing' => '1']) }}">easy</a>
            <a href="{{ route('typing.show', ['typing' => '2']) }}">very hard</a>
        </div>
    </div>
@endsection
