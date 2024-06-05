@extends('layouts.plantilla')

@section('titulo', 'Crear')

@section('contenido')

    <h1>"aqui se crearan los productos"</h1>
    <br>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf

        <label for="">
            nombre:
            <input type="text" name="nombre">
        </label>

        <br><label for="">
            precio
            <input type="number" name="precio">
        </label>

        <br><label for="">Descripcion
            <input type="text" name="descripcion">
        </label>

        <br><label for="">
            Categoria
            <input type="text" name="categoria">
        </label>

        <br><label for="">
            Cantida
            <input type="text" name="cantida">
        </label>

        <br><br>

        <BUtton type="submit">GUARDAR</BUtton>
    </form>

@endsection
