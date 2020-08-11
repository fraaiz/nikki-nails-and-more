@inject('adminNavigation', 'App\Services\Admin\NavigationService')
<!-- Off-canvas menu for mobile -->
<div class="md:hidden">
    <div class="fixed inset-0 flex z-40">
        <!--
          Off-canvas menu overlay, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <!--
          Off-canvas menu, show/hide based on off-canvas menu state.

          Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
          Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
            <div class="absolute top-0 right-0 -mr-14 p-1">
                <button class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar">
                    <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-4">
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-on-dark.svg" alt="Workflow">
                </div>
                <nav class="mt-5 px-2">
                    {{--          MOBILE MENU          --}}
                    @foreach($adminNavigation->getNavigationItems() as $item)
                        <a href="{{ $item['url'] }}" class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">
                            <i class="{{ $item['icon'] }}"></i>
                            {{ $item['title'] }}
                        </a>
                    @endforeach
                </nav>
            </div>
            <div class="flex-shrink-0 flex bg-gray-700 p-4">
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-10 w-10 rounded-full" src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=64&d=retro" alt="">
                        </div>
                        <div class="ml-3">
                            <p class="text-base leading-6 font-medium text-white">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                View profile
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex-shrink-0 w-14">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>

<!-- Static sidebar for desktop -->
<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64 bg-gray-800">
        <div class="h-0 flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4 font-black text-white text-4xl text-center">
                LOGO HERE
            </div>
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <nav class="mt-5 flex-1 px-2 bg-gray-800">
                @foreach($adminNavigation->getNavigationItems() as $item)
                    <a href="{{ $item['url'] }}" class="mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-300 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150 @if(Request::url() === $item['url']) bg-gray-900 @endif">
                        <i class="{{ $item['icon'] }}"></i>
                        {{ $item['title'] }}
                    </a>
                @endforeach
            </nav>
        </div>
        <div class="flex-shrink-0 flex bg-gray-700 p-4">
            <a href="#" class="flex-shrink-0 w-full group block">
                <div class="flex items-center">
                    <div>
                        <img class="inline-block h-9 w-9 rounded-full" src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=64&d=retro" alt="">
                    </div>
                    <div class="ml-3">
                        <p class="text-sm leading-5 font-medium text-white">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="text-xs leading-4 font-medium text-gray-300 group-hover:text-gray-200 transition ease-in-out duration-150">
                            View profile
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
