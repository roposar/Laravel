@extends('layout')

@section('title','Projects')

@section('content')

    <h1>@lang('Projects')</h1>
    <a href="{{ route('projects.create') }}">Crear Proyectos</a>
    <ul>

        @forelse ($projects as $project)
                <li> <a href="{{ route('projects.show',$project) }}"> {{$project->title }}</a></li>
            @empty

                <li>No hay proyectos para Mostrar</li>
        @endforelse
            {{ $projects->links()}}
    </ul>
@endsection


