@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')
{{--de Grids--}}
<div class="grid md:grid-cols-3 sm:mx-2 sm:grid-cols-1 gap-4 mt-8  mb-12" >

    @foreach($treatmentService->getTreatments(3) as $treatment)
        @include('components.treatment_card', ['treatment' => $treatment])
    @endforeach

</div>


<div>

<div class="text-center">
    <a href="/treatments" class=" ml-auto uppercase font-bold text-xl text-center">
        bekijk hier alle behandelingen </a>
</div>

</div>



{{--  het lijntje  --}}
<div class="mt-12 mb-12" style="border-top:1px solid dimgrey"></div>



<div  class="text-center text-pink-400">
    <a href="/pricelist">
    <img  class="h-32 mb-12 center" src="/media/prijslijst.jpg" href="/pricelist">
    <a href="/pricelist" class="  uppercase font-bold text-xl text-center">
        Bekijk hier de prijzen en aanbiedingen! </a> </a>

</div>


<div class="mt-12 mb-12" style="border-top:1px solid dimgrey"></div>

  <div class="fixed right-0 mr-4 mb-4 bottom-0 shadow-xl bg-gray-200 w-1/5 py-2 rounded-lg " style="outline-color: #000000">

    <img class="h-16 w-16 rounded-full mx-auto" src="/media/fotonikki.jpeg">
    <div class="text-center">
        <h2 class="text-lg">Nikki Brouwer</h2>
        <div class="text-purple-500">Pedicure/Manicure/Schoonheidsspecialiste</div>
        <div class="text-gray-600">Info@nikkinailsandmore.nl</div>
        <div class="text-gray-600">06-45315733</div>
        </div>
    </div>

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width:
    }


</style>
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



