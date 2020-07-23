<?php
    /** @var \App\Models\Treatment $treatment */
?>
<div class="rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ $treatment->image }}" alt="Sunset in the mountains">
    <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{ $treatment->name }}</div>
        <p class="text-gray-700 text-base">
            {{ $treatment->description }}
        </p>
    </div>
</div>
