
@extends('plantilla')
@section('contenido')
<h1>
    Post {{ $post->titulo}}
    <div class="contenedorPosts">
    <div class="post">
        <h1 class="titulo">{{ $post->titulo }}</h1>
        <p class="contenido">{{ $post->contenido }}</p>
        <p class="fecha">{{ $post->created_at }}</p>
    </div>
</div>
</h1>
@endsection