<div class="bg-pink-200 py-10 lg:py-12 bg-opacity-50 ">
    <div class="container md:flex relative mx-auto px-4">
        <div class="hidden md:block flex-none pr-5">
            <div class="flex items-center h-full">
                {{--    User photo    --}}
                <img src="{{ asset('media/images/nikkiwerk.png') }}" class="md:w-64 rounded-full" />
            </div>
        </div>
        <div class="flex-auto pl-5">
            {{--    Introduction text + CTA button    --}}
            <div>
                <p class="text-4xl font-bold uppercase">Lorem ipsum dolor sit amet</p>
                <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>

            <button class="mt-8 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="window.location.href='/reserveren'">
                Afspraak maken
            </button>
        </div>
    </div>
</div>
