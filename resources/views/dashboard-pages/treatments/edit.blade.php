@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

<x-dashboard-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit treatment') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 mt-10">
{{--        @foreach($treatments as $treatment)--}}
{{--            <li>{{ $treatment->title }} <a href="{{ route('dashboard.treatments.edit', $treatment) }}" class="ml-10 border border-transparent text-green-500">edit</a> <a href="{{ route('dashboard.treatments.destroy', $treatment) }}" class="ml-10 border border-transparent text-red-500">delete</a></li>--}}
{{--        @endforeach--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Edit Treatment</h1>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="flex flex-col pt-4">
                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <form action="{{ route('dashboard.treatments.update', [$treatment]) }}" method="POST">
                        @csrf


                        <div class="mt-6 w-1/2">
                            <div class="sm:col-span-3">
                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                    Name
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="name" name="name" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Enter treatment name here..." type="text" value="{{ old('name', $treatment->title) }}">
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 w-1/2">
                            <label for="description" class="block text-sm font-medium leading-5 text-gray-700">
                                Description
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <textarea placeholder="Enter treatment description here..." id="description" name="description" rows="5" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{ old('description', $treatment->description) }}</textarea>
                            </div>
                        </div>

                        <div class="mt-6 w-1/2">
                            <div class="sm:col-span-3">
                                <label for="image" class="block text-sm font-medium leading-5 text-gray-700">
                                    Image URL
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="image" name="image" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Enter image url here..." type="text" value="{{ old('image', $treatment->image) }}"">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 w-1/2">
                            <div class="sm:col-span-3">
                                <label for="page_url" class="block text-sm font-medium leading-5 text-gray-700">
                                    Page URL
                                </label>
                                <div class="mt-1 rounded-md shadow-sm">
                                    <input id="page_url" name="page_url" class="form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" placeholder="Enter page URL here..." type="text" value="{{ old('page_url', $treatment->slug) }}">
                                    <p class="mt-2 text-sm text-gray-500">Example: /treatments/voeten</p>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="mt-6 inline-flex items-center px-3 py-2 box border border-transparent text-sm leading-4 font-medium rounded-md text-black bg-gray-100 hover:bg-orange-500 focus:outline-none focus:border-orange-700 focus:shadow-outline-orange active:bg-orange-700 transition ease-in-out duration-150">
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
