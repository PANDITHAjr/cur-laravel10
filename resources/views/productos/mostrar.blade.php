@extends('layouts.plantilla')

@section('titulo', 'Mostrar')

@section('contenido')

    <h1>"el id del producto es =" {{$producto->id}}</h1>
    <p><strong>Nombre:</strong>{{ $producto->nombre }}</p>
    <p><strong>Precio:</strong>{{ $producto->precio }}</p>
    <p><strong>Descripcion:</strong>{{ $producto->descripcion }}</p>
    <p><strong>Categoria:</strong>{{ $producto->categoria }}</p>
    <br><br>
    <a href="{{ route('producto.principal') }}">VOLVER</a>

@endsection
