@extends('layout')

@section('title','portfolio|'.$project->title)

@section('content')
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->url }}</p>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at->diffForHumans() }}</p>

@endsection
