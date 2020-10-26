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

        {{--    OpenGraph meta data    --}}
        <meta data-required="true" property="og:title" content="Xenos.nl" />
        <meta data-required="true" property="og:image" content="https://www.xenos.nl/themes/default/images/default-placeholder.png" />
        <meta data-required="true" property="og:url" content="https://www.xenos.nl/" />
        <meta data-required="true" property="og:description" content="Bij Xenos vind je alles voor de gezellige momenten in en om het huis. Ontdek het betaalbare assortiment in één van onze 150 winkels of shop online." />
        <meta data-required="true" property="og:site_name" content="Xenos.nl" />

        {{--    Site icon    --}}
        <link rel="shortcut icon" href="{{ asset('media/images/logo.png') }}" />
        <link rel="apple-touch-icon" href="{{ asset('media/images/logo.png') }}" />

        {{--    Font    --}}
        <link href="https://rsms.me/inter/inter.css" rel="stylesheet" type="text/css" />

        {{--    Styles    --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="antialiased">
        @include('layouts.topbar')

        {{--      Header      --}}
        @include('layouts.header')

        {{--      Content      --}}
        @yield('content')

        {{--      Footer      --}}
        @include('layouts.footer')
    </body>
</html>
