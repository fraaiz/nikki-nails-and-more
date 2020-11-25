<div class="bg-pink-100 flex justify-end py-1 px-6 text-gray-600">
    <p class="flex-none text-lg mx-3 hidden md:block">
        <a href="https://www.facebook.com/nikkinailsandmore"><i class="fab fa-facebook-square mr-2"></i>nikkinailsandmore</a>
    </p>
    <p class="flex-none text-lg mx-3 hidden sm:block">
        <a href="https://www.instagram.com/nikkinailsandmore/"><i class="fab fa-instagram-square mr-2"></i>nikkinailsandmore</a>
    </p>
    <p class="flex-none text-lg mx-3">
        <i class="fa fa-phone-square"> <a href="tel:+31645315733"></i>(06) 45 31 57 33</a>
    </p>


    @if (Route::has('login'))
        <p class="flex-none text-lg">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </p>
    @endif
</div>
