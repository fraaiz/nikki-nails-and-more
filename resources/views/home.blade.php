@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')
{{--    <h1 class="text-center text-black uppercase text-4xl mt-8" >Behandelingen</h1>--}}
<a href="/treatments">
    <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 mt-8 mb-lg-5 mb-20">

        <div></div>
        <!-- ... -->
        <div></div>

        @foreach($treatmentService->getTreatments() as $treatment)
            @include('components.treatment_card', ['treatment' => $treatment])
        @endforeach

    </div>

</a>



  <div class="fixed right-0 bottom-0  shadow-lg bg-white w-1/5 rounded-lg  ">

    <img class="h-16 w-16 rounded-full mx-auto" src="/media/fotonikki.jpeg">
    <div class="text-center">
        <h2 class="text-lg">Nikki Brouwer</h2>
        <div class="text-purple-500">Pedicure/Manicure/Schoonheidsspecialiste</div>
        <div class="text-gray-600">Info@nikkinailsandmore.nl</div>
        <div class="text-gray-600">06-45315733</div>
        </div>
    </div>


{{--<div class="ml-auto right-auto shadow-lg bg-white w-1/4 rounded-lg my-6 mt-8 ">--}}

{{--    <img class="h-16 w-16 rounded-full mx-auto" src="/media/fotonikki.jpeg">--}}
{{--    <div class="text-center">--}}
{{--        <h2 class="text-lg">Nikki Brouwer</h2>--}}
{{--        <div class="text-purple-500">Pedicure/Manicure/Schoonheidsspecialiste</div>--}}
{{--        <div class="text-gray-600">Info@nikkinailsandmore.nl</div>--}}
{{--        <div class="text-gray-600">06-45315733</div>--}}
{{--    </div>--}}
{{--</div>--}}





{{--    @include('components.alert', ['short_title' => 'New admin panel!', 'long_title' => 'Er is een nieuw Admin paneel, bekijk hem snel!', 'cta_text' => 'piemels', 'cta_url' => Route('admin::dashboard')])--}}
@endsection



