@extends('layouts.app')


@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')
    <div class="bg-pink-100 py-12 lg:py-20">
        <div class="container md:flex relative mx-auto px-4">
            <p class="text-4xl font-bold uppercase"> Contact </p>
        </div>
    </div>

    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto">
            <svg class="absolute left-full transform translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <svg class="absolute right-full bottom-0 transform -translate-x-1/2" width="404" height="404" fill="none" viewBox="0 0 404 404">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)" />
            </svg>
            <div class="text-center">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Contact formulier
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                    Vul het onderstaande formulier in en wij nemen zo spoedig mogelijk contact met u op! Wij strefen ernaar om binnen 1-2 werkdagen te reageren.
                </p>
            </div>
            <div class="mt-12">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div>
                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Voornaam</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="first_name" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150">
                        </div>
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Achternaam</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="last_name" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150">
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="email" placeholder="John@email.nl" type="email" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone_number" class="block text-sm font-medium leading-5 text-gray-700">Telefoonnummer</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center">

                            </div>
                            <input id="phone_number" class="form-input py-3 px-4 block w-full transition ease-in-out duration-150" placeholder="+ 31 (0) 612345678">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-medium leading-5 text-gray-700">Bericht</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <textarea id="message" placeholder="Type hier uw vraag..." rows="4" class="form-textarea py-3 px-4 block w-full transition ease-in-out duration-150"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <!--
                                  Simple toggle

                                  On: "bg-indigo-600", Off: "bg-gray-200"
                                -->
                                <span role="checkbox" tabindex="0" aria-checked="true" class="bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:shadow-outline">
                <!-- On: "translate-x-5", Off: "translate-x-0" -->
                <span aria-hidden="true" class="translate-x-0 inline-block h-5 w-5 rounded-full bg-pink-400 shadow transform transition ease-in-out duration-200"></span>
              </span>
                            </div>
                            <div class="ml-3">
                                <p class="text-base leading-6 text-gray-500">
                                    Door hier te klikken, gaat u akkoord met de
                                    <a href="#" class="font-medium text-gray-700 underline">Privacy Policy</a>
                                    en
                                    <a href="#" class="font-medium text-gray-700 underline">Cookie Policy</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
          <span class="w-full inline-flex rounded-md shadow-sm">
            <button type="button" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-400 hover:bg-pink-300 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-pink-600 transition ease-in-out duration-150">
              Verstuur verzoek
            </button>
          </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
