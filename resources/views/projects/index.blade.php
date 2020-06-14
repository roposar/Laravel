@extends('layout')

@section('title','Portafolio')

@section('content')

    <h1>Portafolio</h1>

    <ul>

        @forelse ($projects as $project)
                <li> <a href="{{ route('projects.show',$project) }}"> {{$project->title }}</a></li>
            @empty

                <li>No hay proyectos para Mostrar</li>
        @endforelse
            {{ $projects->links()}}
    </ul>
@endsection


