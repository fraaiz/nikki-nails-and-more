<?php
    /** @var \App\Models\Treatment $treatment */
?>
<div class="rounded overflow-hidden shadow-lg" >
    <a href=" {{ $treatment->page_url }}">
    <img class="w-full " src="{{ $treatment->image }}">
        </a>
    <a href=" {{ $treatment->page_url }}">
        <div class="px-6 py-4 bg-white">
        <div class="font-bold text-xl mb-2">{{ $treatment->name }}</div>
        <p class="text-gray-700 text-base">
            {{ $treatment->description }}
            </a>
        </p>



    </div>
</div>
