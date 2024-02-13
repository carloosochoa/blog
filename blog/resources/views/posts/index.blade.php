@extends('plantilla')

@section('contenido')
<h1>
    Listado de posts
</h1>
<div class="contenedorPosts">
    @foreach($posts as $post)
    <div class="post">
        <h1 class="titulo">{{ $post->titulo }}</h1>
        <p class="contenido">{{ $post->contenido }}</p>
        <a href="{{ route('posts.show', $post->id)}}" class="btn btn-primary">Mostrar más</a>
    </div>
    @endforeach
</div>
@endsection