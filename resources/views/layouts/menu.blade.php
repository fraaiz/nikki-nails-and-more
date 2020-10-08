@php
    /** @var \App\Services\NavigationService $navigation */
@endphp
@inject('navigation', 'App\Services\NavigationService')

<nav>
    <ul class="flex justify-center">
        @php /** @var \App\Models\NavigationItem $navigationItem */ @endphp
        @foreach($navigation->getNavigationItems() as $navigationItem)
            <li>
                <a class="{{ (Route::currentRouteName() === $navigationItem->route_name) ? 'active' : '' }}"
                   href="{{ route($navigationItem->route_name) }}"
                >{{ $navigationItem->name }}</a>
            </li>
        @endforeach
    </ul>
</nav>


<style>

    nav ul li {
        margin-right: 1rem;
        margin-left: 1rem;
    }

    nav ul li a {
        color: #000000;
    }

    nav ul li a.active {
        color: #eb8794;
    }

</style>

