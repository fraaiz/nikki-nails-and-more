@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')

    <div class="container px-4 mx-auto grid sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mt-5 mb-12">
        @foreach($treatments as $treatment)
            <a href="{{ route('treatment.bySlug', $treatment->slug) }}">
                <div class="rounded overflow-hidden shadow-lg">
                    <img class="w-full h-48 object-cover" src="{{ asset($treatment->image) }}" alt="{{ $treatment->title }}" />
                    <div class="mx-3 mt-4 font-bold text-xl mb-2">
                        {{ $treatment->title }}
                    </div>
                    <p class="my-2 mx-3 text-gray-700 h-52 overflow-auto text-base">
                        {{ $treatment->intro }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>

@endsection
