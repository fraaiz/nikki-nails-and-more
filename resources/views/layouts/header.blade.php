<div class="container relative mx-auto px-4">
    <div class="flex max-h-32 md:max-h-40">
        <div class="flex-shrink">
            {{--    LOGO    --}}
            <img src="{{ asset('media/images/logo.png') }}" class="h-full"/>
        </div>
        <div class="flex-auto">
            {{--    MENU    --}}
            <div class="flex items-center h-full">
                @include('layouts.navigation')
            </div>
        </div>
    </div>
</div>
