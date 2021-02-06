<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ __('messages.app_description') }}">
    <title>@yield('title', config('app.name'))</title>

    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:image" content="{{ asset('image/top.png') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ __('messages.app_description') }}">
    <meta name="twitter:card" content="summary_large_image">

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">
</head>
