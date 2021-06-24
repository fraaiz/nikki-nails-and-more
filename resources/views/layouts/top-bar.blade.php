<div class="bg-pink-200 flex justify-end py-1 text-gray-600">
    <p class="flex-none text-lg mx-3 hidden md:block">
        <a href="{{ config('social.facebook.url') }}">
            <i class="fab fa-facebook-square mr-2"></i>
            {{ config('social.facebook.value') }}
        </a>
    </p>
    <p class="flex-none text-lg mx-3 hidden sm:block">
        <a href="{{ config('social.instagram.url') }}">
            <i class="fab fa-instagram-square mr-2"></i>
            {{ config('social.facebook.value') }}
        </a>
    </p>
    <p class="flex-none text-lg mx-3">
        <a href="{{ config('social.telephone.url') }}">
            <i class="fa fa-phone-square"></i>
            {{ config('social.telephone.value') }}
        </a>
    </p>
{{--    @if (Route::has('login'))--}}
{{--        <p class="flex-none text-lg">--}}
{{--            @auth--}}
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
{{--            @else--}}
{{--                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                @if (Route::has('register'))--}}
{{--                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                @endif--}}
{{--            @endif--}}
{{--        </p>--}}
{{--    @endif--}}
</div>
