@extends('layouts.master')

@inject('treatmentService', 'App\Services\TreatmentService')

@section('content')
{{--    <h1 class="text-center text-black uppercase text-4xl mt-8" >Behandelingen</h1>--}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
        @foreach($treatmentService->getTreatments() as $treatment)
            @include('components.treatment_card', ['treatment' => $treatment])
        @endforeach
    </div>
    @include('components.alert', ['short_title' => 'New admin panel!', 'long_title' => 'We have a new admin panel! Check it out!', 'cta_text' => 'Open now', 'cta_url' => Route('admin::dashboard')])
@endsection



