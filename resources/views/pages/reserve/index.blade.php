@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')
    <div class="bg-pink-100 py-12 lg:py-20">
        <div class="container md:flex relative mx-auto px-4">
            <p class="text-4xl font-bold uppercase"> Afspraak maken </p>
        </div>
    </div>



        <h1 class="text-center text-black font-bold uppercase text-2xl mt-10">
            Kies je blok <br>
        </h1>
        <p class="text-center text-black capitalized text-l mt-3 ">
            Online reserveren gaat eenvoudig via blokken. U kunt hieronder een tijdsblok kiezen die u het beste schikt.<br>
            Als een tijdsblok gereserveerd is zou u helaas een ander moment moeten uitkiezen. Ik neem vervolgens zo snelmogelijk contact met u op.
        </p>



    <div class="bg-white overflow-hidden sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto">
            <div class=" mb-12">
                <form action="#" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">

                    <div class="sm:col-span-2">
                        <label for="Date&Time" class="block text-sm font-medium leading-5 text-gray-700">Maandag 2 Januari</label>
                        <button type="button" class="w-full inline-flex mt-1  px-4 py-3 border border-transparent text-base leading-6 font-medium rounded-md shadow-lg border-gray-300 text-black bg-white hover:bg-gray-100 focus:outline-none active:bg-pink-200 transition ease-in-out duration-150">
                            10:00 - 12:00    ~      Klik hier om te reserveren
                        </button>
                        <button type="button" class="w-full inline-flex mt-1  px-4 py-3 border border-transparent text-base leading-6 font-medium rounded-md shadow-lg border-gray-300 text-black bg-white hover:bg-gray-100 focus:outline-none active:bg-pink-200 transition ease-in-out duration-150">
                            14:00 - 16:00    ~      Klik hier om te reserveren
                        </button>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="Date&Time" class="block text-sm font-medium leading-5 text-gray-700">Donderdag 5 Januari</label>
                        <button type="button" class="w-full inline-flex mt-1  px-4 py-3 border border-transparent text-base leading-6 font-medium rounded-md shadow-lg border-gray-300 text-black bg-white hover:bg-gray-100 focus:outline-none active:bg-pink-200 transition ease-in-out duration-150">
                            10:00 - 12:00    ~      Klik hier om te reserveren
                        </button>
                        <button type="button" class="w-full inline-flex mt-1  px-4 py-3 border border-transparent text-base leading-6 font-medium rounded-md shadow-lg border-gray-300 text-black bg-white hover:bg-gray-100 focus:outline-none active:bg-pink-200 transition ease-in-out duration-150">
                            15:00 - 17:00    ~      Klik hier om te reserveren
                        </button>
                    </div>

                </form>

                <button type="button" class="w-full inline-flex items-center mt-12 justify-center px-6 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-400 hover:bg-pink-300 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-pink-600 transition ease-in-out duration-150">
                    Besvestig afspraak
                </button>
            </div>
        </div>
    </div>
@endsection
