@extends('plantilla')
@section('titulo','Listado de Libros')
@section('contenido')
<div class="row">
@forelse($libros as $libro)
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $loop->index+1 }} - {{ $libro["titulo"] }}</h5>
        <p class="card-text">Autor: {{ $libro["autor"] }}</p>
        <a href="#" class="btn btn-primary">Detalles</a>
      </div>
    </div>
  </div>
    @empty
        <p>No existen libros</p>
    @endforelse
    </div>
@endsection
