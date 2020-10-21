@php
    /** @var \App\Services\NavigationService $navigation */
@endphp
@inject('navigation', 'App\Services\NavigationService')


<nav class="flex justify-center ">
    <ul class="topnav " id="myTopnav">
        @php /** @var \App\Models\NavigationItem $navigationItem */ @endphp
        @foreach($navigation->getNavigationItems() as $navigationItem)

                <a class="{{ (Route::currentRouteName() === $navigationItem->route_name) ? 'active' : '' }}"
                   href="{{ route($navigationItem->route_name) }}"
                >{{ $navigationItem->name }}</a>

        @endforeach
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars center" style="font-size:24px"></i>
        </a>
    </ul>
</nav>

<br><br> <!-- dit wel weer weghalen -->

{{-- Zo zou ik het gedaan hebben --}}

{{-- Tablet/ Desktop menu --}}
<nav class="flex justify-center">
    @php /** @var \App\Models\NavigationItem $navigationItem */ @endphp
    @foreach($navigation->getNavigationItems() as $navigationItem)
        <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === $navigationItem->route_name) bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
           href="{{ route($navigationItem->route_name) }}"
        >
            {{ $navigationItem->name }}
        </a>
    @endforeach
    <a class="md:hidden text-base" onclick="toggleMobileMenu()">
        MENU <i class="fa fa-bars"></i>
    </a>
</nav>

{{-- Mobile menu --}}
<div id="mobileMenuFrame" class="hidden fixed top-0 right-0 bottom-0 left-0 bg-white z-50">
    <p class="mt-4 text-2xl font-bold text-center">MENU</p>
    <i class="fa fa-close fixed top-0 right-0 mt-4 mr-4 p-2" onclick="toggleMobileMenu()"></i>
    <ul>
        @foreach($navigation->getNavigationItems() as $navigationItem)
            <li>
                <a class="text-center my-2 py-2 block"
                   href="{{ route($navigationItem->route_name) }}"
                >
                    {{ $navigationItem->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<script>
    // Jouw code
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    // Mijn code
    /**
     * Toggle the 'hidden' class on the mobile menu frame.
     */
    function toggleMobileMenu()
    {
        document.getElementById("mobileMenuFrame").classList.toggle("hidden");
    }
</script>

<style>
    .item {
        order: 5; /* default is 0 */
    }
    /*nav ul li {*/
    /*    margin-right: 1rem;*/
    /*    margin-left: 1rem;*/
    /*}*/

    /*nav ul li a {*/
    /*    color: #000000;*/
    /*}*/

    /*nav ul li a.active {*/
    /*    color: #eb8794;*/
    /*}*/


    .topnav {
        overflow: hidden;
        /*background-color: #333;*/
        /*margin-left: 14rem;*/
        /*margin-right: 14rem;*/

    }

    .topnav a {
        /*float: left;*/

        /*display: block;*/
        color: black;
        text-align: center;
        padding: 14px 14px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        color: lightpink;
        /*display: block;*/
        padding-bottom: 10px;
    }

    .topnav a.active {
        background-color: pink;
        color: white;
    }

    .topnav-centered a {
        float: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .topnav .icon {
        display: none;
        height: 140px;
    }

    @media screen and (max-width: 600px) {
        .topnav a:not(:first-child) {
            display: none;
        }

        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 600px) {
        .topnav.responsive {
            position: relative;
        }

        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
    }

    .topnav-centered a {
        /*float: none;*/
        /*position: absolute;*/
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .pagination {
        text-align: center;
    }

</style>

