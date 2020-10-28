<?php
/** @var \App\Models\Treatment $treatment */
?>
{{--<div class="container grid mx-auto sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8 mb-12  ">--}}
<div class="rounded overflow-hidden shadow-lg" >
    <a href=" {{ $treatment->page_url }}">
        <img class="w-full " src="{{ $treatment->image }}"></a>
    <a href="{{ route('treatment.bySlug', $treatment->slug) }}">
        <div class="px-6 py-4 bg-white">
            <div class="font-bold text-xl mb-2">{{ $treatment->title }}</div>
            <p class="text-gray-700 text-base">{{ $treatment->description }}
    </a>
    </p>



</div>
