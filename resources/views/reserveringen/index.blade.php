@extends('layouts.layout')

@section('title', 'Reserveringen Overzicht')

@section('content')
    <h1>Reserveringen</h1>
    <ul>
        @foreach($reserveringen as $reservering)
        <li>{{ $reservering->user_name }} - Stoel: {{ $reservering->seat_number }}</li>
        @endforeach
    </ul>
@endsection