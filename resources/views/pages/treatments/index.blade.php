@extends('layouts.app')

@php
    /** @var \App\Models\Treatment[] $treatments */
@endphp

@section('content')
    <div class="container md:flex relative mx-auto px-4">
        @foreach($treatments as $treatment)
            <p><a href="{{ route('treatment.bySlug', $treatment->slug) }}">{{ $treatment->title }}</a></p>
        @endforeach
    </div>
@endsection
