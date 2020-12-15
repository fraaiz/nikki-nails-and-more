@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')
    <div class="bg-pink-100 py-12 lg:py-20">
        <div class="container md:flex relative mx-auto px-4">
            <p class="text-4xl font-bold uppercase"> About me </p>
        </div>
    </div>

<body>

<div class="container grid mx-auto md:grid-cols-2">
    <div class="hidden md:block flex-none pr-5">
        <div class="flex center items-center h-full">
            {{--    User photo    --}}
            <img src="{{ asset('media/images/nikkiwerk.png') }}" class="md:w-64 rounded-full" />
        </div>
    </div>

    <div class="grid-item gap-4 mt-8 mb-lg-5 mb-20  ">

        <h1 class="grid-item  text-center text-black font-italic text-2xl mt-10 ">
            Hallo wat leuk dat u mijn website bezoekt!

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Ik ben Nikki de eigenaresse van NikkiNails&amp;More.<br>
            Ik ben gediplomeerd schoonheidsspecialiste en pedicure.</h1>

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Ik heb altijd al een passie gehad voor de nagels. Het leukste vind ik mijn klanten met<br>
            stralende nagels en een glimlach de deur uit te laten gaan.</h1>

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Door mijn passie heb ik veel kennis op gedaan over de nagels die ik graag wil laten zien en delen in mijn salon.</h1>

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Ik zorg er voor dat u in een schone en hygiënische omgeving uw nagels kunt laten doen.<br>
            Daarnaast kies ik voor de beste producten die de conditie van de nagel verbeteren.<br>
            Ik weet hoe het voelt om niet trots ze zijn op uw eigen nagels. Daarom hoop ik dat met mijn hulp iedereen weer trots kan zijn op zijn of haar nagels.<br>

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Er is veel mogelijk, wie niet waagt wie niet durft.</h1>

        <h1 class="text-center text-black font-italic text-sm mt-5">
            Nagels mogen stralen net als u!</h1>

        </h1>
    </div>


</div>
</body>
@endsection
