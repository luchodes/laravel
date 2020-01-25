@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
         {{-- @isset($portfolio)
            @foreach($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset  --}}

        @forelse($projects as $project)
            <li><a href="{{ route('projects.show',$project)}}">{{ $project->title }}</a> <br> <small>{{ $project->description }}</small> <br> {{ $project->created_at->format('Y-m-d')}} <br> {{ $project->updated_at->diffForHumans() }}</li>
            {{--$project->getRouteKey() => 1 --}}
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse

        {{ $projects->links() }}


    </ul>
@endsection