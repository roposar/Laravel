@extends('layout')

@section('title','Crear proyecto')

@section('content')

    <h1>Crear nuevo Proyecto</h1>

    <form method="POST" action="{{ route('projects.store') }}">

        @csrf

        <label for="">
            Titulo del proyecto <br>
            <input type="text" name="title">
        </label>
        <br>
        <label for="">
            Url del proyecto <br>
            <input type="text" name="url">
        </label>
        <br>
        <label for="">
            Descripcion del proyecto <br>
            <textarea name="description" id=""></textarea>
        </label>
        <br>
        <button>Guardar</button>
    </form>

@endsection

