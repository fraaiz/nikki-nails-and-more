@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')
    <div class="bg-pink-100 py-12 lg:py-20">
        <div class="container md:flex relative mx-auto px-4">
            <p class="text-4xl font-bold uppercase"> Prijslijst </p>
        </div>
    </div>

    <head>
        <h1 class="text-center text-black font-bold uppercase text-2xl mt-10">
            PRIJSLIJST BEHANDELINGEN <br>
            2020-2021 <br>
        </h1>
    </head>


<body>

    <div class="container grid mx-auto md:grid-cols-2">

        <div class="ml-4 md:ml-0 grid-item sm:px-5  gap-4 mt-8 mb-lg-5 mb-20 ">

            <h1 class=" text-left text-black font-bold uppercase text-2xl mt-10 ">
                VOETEN
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                COSMETISCHE PEDICURE			€15,- <br>
                MEDISCHE PEDICURE 				€20,- <br>
            </h1>


            <h1 class=" text-left text-black font-bold uppercase text-2xl mt-10 ">
                HANDEN
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                MANICURE 					€15,-
            </h1>


            <h1 class=" text-left text-black font-bold uppercase text-2xl mt-10 ">
                GELCOLOR
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                MANICURE + GELCOLOR				€20,- <br>
                COSMETISCHE PEDICURE + GELCOLOR		€20,- <br>
                MEDISCHE PEDICURE + GELCOLOR		€25,- <br>
                VERWIJDEREN GELCOLOR (Indien geen nieuwe gelcolor) 	€5,- <br>
            </h1>

            <h1 class=" text-left text-black font-bold uppercase text-2xl mt-10 ">
                GEZICHT
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                WENKBRAUW EPILEREN (PINCET)		€8,- <br>
                WENKBRAUW EPILEREN (HARSEN)		€10,- <br>
                WENKBRAUW VERVEN 				€10,- <br>
                WIMPERS VERVEN 				€10,- <br>
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                HARSEN BOVENLIP				€10,- <br>
                HARSEN KIN  					€10,- <br>
            </h1>

            <h1 class=" text-left text-black font-bold uppercase text-2xl mt-10 ">
                LICHAAM
            </h1>

            <h1 class="text-left text-black font-italic text-sm mt-5">
                WAXEN ARMEN					€15,- <br>
                WAXEN ONDERBENEN				€15,- <br>
                WAXEN BOVENBENEN 				€15,- <br>
                WAXEN GEHELE BENEN 				€20,- <br>
            </h1>
        </div>

        <div class=" grid-item w-4/5 h:auto md:h-56 bg-pink-200 shadow-2xl rounded-lg mt-16 ml-10">
            <h1 class="text-center mt-2 uppercase font-bold text-lg">
                Combi-deals <br>
                MANICURE + (C) PEDICURE<br>
            </h1>

            <h1 class="text-center mt-5 uppercase font-bold ">
                MANICURE GELCOLOR & (C) PEDICURE GELCOLOR<br>
                €35,-<br>
            </h1>

            <h1 class="text-center mt-5 uppercase font-bold ">
                MANICURE GELCOLOR & (M) PEDICURE GELCOLOR<br>
                €40,-<br>
            </h1>
        </div>

    </div>

</body>
@endsection
