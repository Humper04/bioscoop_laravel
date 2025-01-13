@extends('layouts.layout')

@section('title', 'Films Overzicht')

@section('content')
    <h1>Films</h1>
    <ul>
        @foreach($films as $film)
        <li><a href="/films/{{ $film->id }}">{{ $film->title }}</a></li>
        @endforeach
    </ul>
@endsection