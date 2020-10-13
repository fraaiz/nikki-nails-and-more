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
    <link rel="icon" type="image/png" href="media/nikkinails&more_logo_180x180.png"/>

</head>

<body>

<style>
    body {
        background-image: url("/media/achtergrondwebsite.jpg");

    }

</style>


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


<footer>
<nav id="footer" style="background-color: #1A1919" class="mt-32">

    <div style="color: #696969;"
    <h1 class="text-center pt-8 text-black font-italic text-lg">
        3765 ES Soest –   06-12345678<br>
        Copyright © 2020 NikkiNailsAndMore
    </h1>


    <div class="center pt-8 pb-4">

        <div class=" center grid grid-flow-col w-64 mb-2 sm:-mx-1 md:-mx-px lg:-mx-2 xl:  ">

            <A href="https://www.instagram.com/nikkinailsandmore/" class="overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4  xl:px-2 xl:w-auto fa fa-instagram"></A>
            <A href="https://www.facebook.com/nikkinailsandmore" class="overflow-hidden sm:my-1 sm:px-1 sm:w-1/2 md:my-px md:px-px md:w-1/2 lg:my-2 lg:px-2 lg:w-1/4  xl:px-2 xl:w-auto fa fa-facebook"></A>

        </div>
    </div>





        <div class="pt-4 md:flex md:items-center md:justify-center " style="border-top:1px solid dimgrey; background-color: #1A1919">
            <ul class="">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


                <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/404">Disclaimer</a></li>
                <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/404">Cookie policy</a></li>
                <li class="md:mx-2 md:inline leading-7 text-sm" id="footer-navi-2"><a class="text-white underline text-small" href="/404">Privacy</a></li>
            </ul>
        </div>

    </div>



</nav>
</footer>

<style>
.fa {
padding: 30px;
font-size: 50px;
width: 110px;
text-align: center;
text-decoration: none;
border-radius: 50%;
}
.fa-instagram {
    background: #ababab;
    color: white;
}
.fa-facebook {
    background: #ababab;
    color: white;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;

}
</style>



