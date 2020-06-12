@extends('layout')

@section('title','Portafolio')

@section('content')

    <h1>Portafolio</h1>

    <ul>

        @forelse ($portfolio as $portfolioItem)
                <li> {{$portfolioItem['title']}} <small>{{ $loop->first ? 'Es el Primero' : '' }}</small>  </li>
            @empty

                <li>No hay proyectos para Mostrar</li>
        @endforelse
    </ul>
@endsection

