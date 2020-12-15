@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp
<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Treatments') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 mt-10">
        <ul class="mt-10 bg-white mx-auto rounded-lg py-5 pl-5 grid grid-cols-3">
            @foreach($treatments as $treatment)
                <li>{{ $treatment->title }}
                    <a href="{{ route('dashboard.treatments.edit', $treatment) }}" class="ml-10 pl-2 pr-2  border border-transparent text-green-500">edit</a>
                    <a href="{{ route('dashboard.treatments.destroy', $treatment) }}" class="ml-10 border border-transparent text-red-500">delete</a></li>
            @endforeach
        </ul>
    </div>

    <div class="container mx-auto text-center px-4 mt-10">
        <p>
            <a href="{{ route('dashboard.treatments.create') }}">
                <span class="rounded-md shadow-sm text">
                    <button type="button" class="items-center text-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-400 hover:bg-pink-300 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-pink-600 transition ease-in-out duration-150">
                        Behandeling aanmaken
                    </button>
                </span>
            </a>
        </p>
    </div>

</x-dashboard-layout>
