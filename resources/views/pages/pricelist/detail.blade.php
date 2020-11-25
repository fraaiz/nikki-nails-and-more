@extends('layouts.app')

@php
    /** @var \App\Models\Treatment $treatment */
@endphp

@section('content')
    @include('pages.treatments.hero', ['title' => $treatment->title])
    <div class="container mx-auto px-4 mt-6">
        <p class="text-center text-gray-600">{!! $treatment->description !!}</p>
    </div>
@endsection
