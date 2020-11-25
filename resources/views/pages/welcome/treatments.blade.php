{{--@extends('layouts.app')--}}

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

{{--@section('content')--}}


    <div class="my-6">
    <div class="container relative mx-auto px-4">
        <p class="text-2xl font-bold uppercase text-center text-gray-600">Behandelingen</p>
        <p class="font-lg text-gray-600 text-center ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

            <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8  mb-12">

                @foreach($treatments as $treatment)

                    <div class="rounded overflow-hidden shadow-lg">
                        <a href=" {{ $treatment->page_url }}">
                            <img class="w-full h-56 object-cover " src="{{ $treatment->image }}"></a>
                        <a href="{{ route('treatment.bySlug', $treatment->slug) }}">
                            <div class="mx-3 md:mt-4 font-bold text-xl mb-2">{{ $treatment->title }}</div>
                            <p class="my-2 mx-3 text-gray-700 h-auto overflow-auto text-base">{{ $treatment->description }}</a></p>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
</div>

{{--@endsection--}}



{{--@inject('treatmentService', 'app\services\treatmentservices.php')--}}

{{--@section('content')--}}
{{--    de Grids--}}
{{--    <div class="grid mx-auto  sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8  mb-12" >--}}

{{--        @foreach($treatmentService->getTreatments(3) as $treatment)--}}
{{--            @include('components.treatment_card', ['treatment' => $treatment])--}}
{{--        @endforeach--}}

{{--    </div>--}}




{{--    <div class="text-center">--}}
{{--        <a href="/treatments" class=" ml-auto uppercase font-bold text-xl text-center">--}}
{{--            bekijk hier alle behandelingen </a>--}}
{{--    </div>--}}

{{--    </div>--}}



{{--    --}}{{--  het lijntje  --}}
{{--    <div class="mt-12 mb-12" style="border-top:1px solid dimgrey"></div>--}}



{{--    <div  class="text-center text-pink-400">--}}
{{--        <a href="/pricelist">--}}
{{--            <img  class="h-32 mb-12 center" src="/media/prijslijst.jpg" href="/pricelist">--}}
{{--            <a href="/pricelist" class="  uppercase font-bold text-xl text-center">--}}
{{--                Bekijk hier de prijzen en aanbiedingen! </a> </a>--}}

{{--    </div>--}}



{{--@endsection--}}
