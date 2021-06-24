<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--    Default meta data    --}}
    <title>{{ config('app.name', 'Nikki Nails and More') }}</title>

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Jesse Brouwer" />
    <meta name="robots" content="INDEX, FOLLOW" />

    {{--    Site icon    --}}
    <link rel="shortcut icon" href="{{ asset('media/images/logo.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('media/images/logo.png') }}" />

    {{--    Font    --}}
    <link href="https://rsms.me/inter/inter.css" rel="stylesheet" type="text/css" />

    {{--    Styles    --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
    <body class="antialiased">
        @include('layouts.top-bar')

        {{--      Header      --}}
        @include('layouts.header')

        {{--      Content      --}}
        @yield('content')

        {{--      Footer      --}}
        @include('layouts.footer')
    </body>
</html>
