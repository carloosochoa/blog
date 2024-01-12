@extends('plantilla')

@section('titulo','Inicio')

@section('contenido')
    <h1>Página de Inicio</h1>
    <p>Bienvenido {{isset($nombre) ? $nombre : "Usuario"}}</p>
    @endsection
</body>
</html>