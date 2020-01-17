@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        <!-- @isset($portfolio)
            @foreach($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset -->

        @forelse($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}</li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse


    </ul>
@endsection