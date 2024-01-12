@extends('plantilla')

@section('titulo', 'Listado de Libros')

@section('contenido')
    <h1>Listado de libros</h1>
    <table>
        <tr class="titulo">
            <td>Indice</td>
            <td>Libro</td>
            <td>Autor</td>
        </tr>
        @forelse($libros as $libro)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$libro["titulo"]}}</td>
            <td>{{$libro["autor"]}}</td>
            
        </tr>
        @empty
        <p>No hay valores</p>
        @endforelse  
    </table>
    @endsection
</body>
</html>