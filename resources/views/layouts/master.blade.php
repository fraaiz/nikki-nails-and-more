<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Nikki Nails and More</title>
    <meta name="description" content="The HTML5 Herald" />
    <meta name="author" content="SitePoint" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" type="styleshet" rel="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto">
        <div class="header pt-4">
            <div class="logo">
                <a class="active" href="{{ route('home') }}">
                    <img src="{{ asset('media/logo.png') }}" class="w-56 mx-auto"/>
                </a>
            </div>
            @include('layouts.menu')
        </div>
        @yield('content')
    </div>
</body>

</html>
