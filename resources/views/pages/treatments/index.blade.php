@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')





<div class="container mx-auto grid grid-cols-4 gap-4 mt-8 mb-20">

@foreach($treatments as $treatment)

    <div class="rounded overflow-hidden shadow-lg">
        <a href=" {{ $treatment->page_url }}">
        <img class="w-full " src="{{ $treatment->image }}"></a>
        <a href="{{ route('treatment.bySlug', $treatment->slug) }}">
    <div class="mx-3 font-bold text-xl mb-2">{{ $treatment->title }}</div>
        <p class="my-2 mx-3 text-gray-700 h-auto overflow-auto text-base">{{ $treatment->description }}</a></p>
    </div>

@endforeach
</div>












@endsection
