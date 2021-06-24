{{--@extends('layouts.app')--}}

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

{{--@section('content')--}}


    <div class="my-6">
    <div class="container relative mx-auto px-4">
        <a href="/behandelingen">
        <p class="text-2xl font-bold uppercase text-center text-gray-600">Behandelingen</p>
        <p class="font-lg text-gray-600 text-center mb-3   ">Door de jaren heb ik mezelf gespecialiseerd in verschillende behandelingen binnen
            de beauty branche. Kijk gerust even rond, indien u hulp nodig heeft met een keuze
            maken voor de juiste behandeling? Neem dan gerust contact op dan help ik u met
            liefde de juiste keuze te maken.</p>
        </a>
        <div class="grid md:grid-cols-3">
            <a></a>
            <button class="bg-white hover:bg-gray-100 center mx-auto text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" onclick="window.location.href='/behandelingen'">
                Bekijk alle behandelingen
            </button>
            <a></a>
        </div>
            <div class="container mx-auto grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 mt-8  mb-12">

                @foreach($treatments as $treatment)

                    <div class="rounded overflow-hidden shadow-lg">
                        <a href=" {{ $treatment->page_url }}">
                            <img class="w-full h-56 object-cover " src="{{ $treatment->image }}"></a>
                        <a href="{{ route('treatment.bySlug', $treatment->slug) }}">
                            <div class="mx-3 mt-2 md:mt-4 font-bold text-xl mb-2">{{ $treatment->title }}</div>
                            <p class="my-2 mx-3 text-gray-700 h-auto overflow-auto text-base">{{ $treatment->intro }}</a></p>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
</div>

