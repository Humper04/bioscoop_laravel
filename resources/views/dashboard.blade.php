@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1>Welkom, {{ Auth::user()->name }}</h1>
<p>Bekijk hier je reserveringen:</p>
<ul>
    @foreach($reserveringen as $reservering)
    <li>{{ $reservering->film->title }} - Stoel: {{ $reservering->seat_number }}</li>
    @endforeach
</ul>
@endsection