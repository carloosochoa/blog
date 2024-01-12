@extends('plantilla')
@section('titulo','Listado de Libros')
@section('contenido')
    <div class="contenedor">
        @forelse($cortos as $corto)
        <div class="tarjeta">
            <h1>{{ $corto["id"] }} - {{ $corto["titulo"] }}</h1>
            <p>Director: {{ $corto["director"] }}</p>
            <p>{{ $corto['sinapsis'] }}</p>
            <button class="btn btn-info">Detalles</button>
        </div>
    @empty
        <p>No existen libros</p>
    @endforelse
    </div>
@endsection