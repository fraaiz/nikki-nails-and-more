<div class="container relative mx-auto px-4">
    <div class="flex max-h-32 md:max-h-40">
        <div class="flex-shrink w-40">
            {{--    LOGO    --}}
            <a href="/">
            <img src="{{ asset('media/images/logo.png') }}" class="h-full">
        </div>
        </a>
        <div class="flex-auto">
            {{--    MENU    --}}
            <div class="flex float-right mr-5 items-center h-full">
                @include('layouts.navigation')
            </div>
        </div>
    </div>
</div>
