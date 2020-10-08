@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')

    <div class="grid md:grid-cols-4 sm:mx-2 gap-4 mt-8 mb-20">

        @foreach($treatmentService->getTreatments() as $treatment)
            @include('components.treatment_card', ['treatment' => $treatment])
        @endforeach

    </div>
<div>


</div>

    <style>
        body {
            background-image: url("/media/achtergrondwebsite.jpg");

        }

    </style>
@endsection
