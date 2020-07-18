<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Nikki Nails and More</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" type="styleshet" rel="text/css" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container mx-auto">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('media/logo.png') }}" class="w-56 mx-auto"/>
            </div>
            @include('layout.menu')
        </div>



        @yield('content')
    </div>
</body>

</html>
