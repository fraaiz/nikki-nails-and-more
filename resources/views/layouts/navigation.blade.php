{{-- Tablet/ Desktop menu --}}
<nav class="flex justify-center">
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'welcome') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('welcome') }}"
    >HOME</a>
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'treatments.index') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('treatment.index') }}"
    >BEHANDELINGEN</a>
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'pricelist') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('pricelist') }}"
    >PRIJSLIJST</a>
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'reserve') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('reserve') }}"
    >AFSPRAAK MAKEN</a>
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'aboutme') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('aboutme') }}"
    >OVER MIJ</a>
    <a class="hidden md:block flex-none mx-2 px-2 py-1 text-base @if(Route::currentRouteName() === 'contact') bg-red-200 hover:text-white @else hover:text-red-200 @endif rounded"
       href="{{ route('contact') }}"
    >CONTACT</a>

    <a class="md:hidden text-base" onclick="toggleMobileMenu()">
        MENU <i class="fa fa-bars"></i>
    </a>
</nav>

{{-- Mobile menu --}}
<div id="mobileMenuFrame" class="hidden fixed top-0 right-0 bottom-0 left-0 bg-white z-50">
    <p class="mt-4 text-2xl font-bold text-center ">MENU</p>
    <i class="fa fa-close fixed top-0 right-0 mt-4 mr-4 p-2" onclick="toggleMobileMenu()"></i>
    <ul>
        <li>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'welcome') bg-red-200 @endif" href="{{ route('welcome') }}">
                HOME
            </a>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'treatment.index') bg-red-200 @endif" href="{{ route('treatment.index') }}">
                BEHANDELINGEN
            </a>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'pricelist') bg-red-200 @endif" href="{{ route('pricelist') }}">
                PRIJSLIJST
            </a>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'reserve') bg-red-200 @endif" href="{{ route('reserve') }}">
                AFSPRAAK MAKEN
            </a>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'aboutme') bg-red-200 @endif" href="{{ route('aboutme') }}">
                OVER MIJ
            </a>
            <a class="text-center my-2 py-2 block @if(Route::currentRouteName() === 'contact') bg-red-200 @endif" href="{{ route('contact') }}">
                CONTACT
            </a>
        </li>
    </ul>
</div>

<script>
    /**
     * Toggle the 'hidden' class on the mobile menu frame.
     */
    function toggleMobileMenu()
    {
        document.getElementById("mobileMenuFrame").classList.toggle("hidden");
    }
</script>
