@extends('layouts.app')

@php
    /** @var \App\Models\Treatment $treatment */
@endphp

@section('content')
    @include('pages.treatments.hero', ['title' => $treatment->title])

<div class="mt-10 container mx-auto grid grid-cols-2 ">
    <div class="mx-10">
        <p class="grid-item text-left text-gray-600">{!! $treatment->description !!}</p>
    </div>
    <div class="ml-12 flex center items-center ">
        <img class="w-half text-center h-48 rounded-md object-cover" src="{{ asset($treatment->image)}}"/>
    </div>
</div>

<div class="mt-10 pb-8 container mx-auto grid grid-cols-2 ">
    <div class="ml-12 flex center items-center ">
        <img class="w-half text-center h-48 rounded-md object-cover" src="{{ asset($treatment->second_image)}}"/>
    </div>
    <div class="mx-10">
        <p class="grid-item text-left text-gray-600">{!! $treatment->second_description!!}</p>
    </div>

</div>
@endsection
