{{-- @php
    dd(Route::getRoutes());
@endphp --}}


@extends('layouts.app')

@section('title', $film->title)

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>{{ $film->title }}</h2>
    </div>
    <div class="card-body">
        <p><strong>Beschrijving:</strong></p>
        <p>{{ $film->description }}</p>

        <p><strong>Release datum:</strong> 
            {{ \Carbon\Carbon::parse($film->release_date)->format('d-m-Y') }}
        </p>

        <a href="/films" class="btn btn-secondary">Terug naar overzicht</a>
    </div>
</div>
@endsection
