<nav>
    <ul class="flex justify-center"
        class="text-orange-400">
        <li class="{{ (strpos(Route::currentRouteName(), 'home') == 0) ? 'active' : '' }}">
            <a class="active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{ (strpos(Route::currentRouteName(), 'pricelist') == 0) ? 'active' : '' }}">
            <a href="{{ route('pricelist') }}">Prijslijst</a>
        </li>
    </ul>
</nav>

<style>

    nav ul li {
        margin-right: 1rem;
        margin-left: 1rem;
    }

    nav ul li a {
        color: #f6ad55;
    }

    nav ul li a.active {
        color: #fbd38d;
    }

</style>