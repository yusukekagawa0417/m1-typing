@extends('layouts.app')
@section('title', config('app.name'))
@section('content')
    <div class="container">
        <div class="box">
            <h1 class="top-title">
                <a class="top-title-link" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </h1>
        </div>
        <!-- <div class="box">
            <h2 class="top-description">{{ __('messages.app_description') }}</h2>
        </div> -->
        <div class="box">
            <a href="{{ route('typing.show', ['typing' => '1']) }}" class="btn btn-solid-gold">easy</a>
            </a>
            <a href="{{ route('typing.show', ['typing' => '2']) }}" class="btn btn-solid-gold">hard</a>
            </a>
        </div>
    </div>
@endsection
