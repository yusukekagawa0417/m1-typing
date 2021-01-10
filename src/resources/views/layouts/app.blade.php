<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('shared.head')
    <body>
        <div class="layout">
            @yield('content')
        </div>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
