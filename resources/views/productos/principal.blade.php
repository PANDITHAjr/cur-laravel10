@extends('layouts.plantilla')

@section('titulo', 'Principal')

@section('contenido')

    <h1>"aqui se mostraran todos los productos"</h1>
    <br>
    <a href="{{ route('producto.crear') }}">NUEVO REGISTRO</a>
    <br><br>

    @foreach ( $prod as $produ )

    <li>

        <a href="{{route('producto.mostrar', $produ->id)}}">Nombre:{{ $produ ->nombre }}, Categoria:{{ $produ ->categoria }}</a>

    </li>

    @endforeach
    {{ $prod->links() }};

@endSection
