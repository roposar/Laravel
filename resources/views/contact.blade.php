@extends('layout')

@section('title','Contacto')

@section('content')
    <h1>Contacto</h1>

    <form method="POST" action="{{ route('contact')}}">
        @csrf
        <input type="text" name="name" placeholder="Nombre..." value=""><br>
        <input type="email" name="email" placeholder="Email..." value="roposar@hotmail.com"><br>
        <input type="text" name="subject" placeholder="Asunto..." value="Asunto 1"><br>
        <textarea name="content" placeholder="Mensaje...">Mensaje de Prueba</textarea>
        <button>Enviar</button>
    </form>
@endsection

