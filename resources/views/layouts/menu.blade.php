@php
    /** @var \App\Services\NavigationService $navigation */
@endphp
@inject('navigation', 'App\Services\NavigationService')


<nav>
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







<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<style>

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

    .centertest {
        text-align-last: center;
        border: 2px solid black;
    }

    .CenterText {
        width:200px;
        height:200px;
        position: fixed;
        background-color: blue;
        top: 50%;
        left: 50%;
        margin-top: -100px;
        margin-left: -100px;
    }

    .topnav {
        overflow: hidden;
        background-color: #333;
        /*margin-left: 14rem;*/
        /*margin-right: 14rem;*/

    }

    .topnav a {
        float: left;
        display: block;
        color: pink;
        text-align: center;
        padding: 14px 14px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        color: white;
        display: block;
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

