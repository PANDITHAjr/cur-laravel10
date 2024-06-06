@extends('layouts.plantilla')

@section('titulo', 'CREAR PRODUCTO')

@section('contenido')


    <style>
        .-z-1 {
            z-index: -1;
        }

        .origin-0 {
            transform-origin: 0%;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label,
        textarea:focus~label,
        textarea:not(:placeholder-shown)~label,
        select:focus~label,
        select:not([value='']):valid~label {
            /* @apply transform; scale-75; -translate-y-6; */
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
            --tw-scale-x: 0.75;
            --tw-scale-y: 0.75;
            --tw-translate-y: -1.5rem;
        }
    </style>

    <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
        <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-5xl">
            <h1 class="text-2xl font-bold mb-8">EDITAR PRODUCTO</h1>
            <form action="{{ route('producto.update', $prod) }}" method="POST">
                @csrf
                @method('put')
                <h2 class="text-2xl font-bold ">Actualizar datos del producto {{$prod->id}}</h2>
                <div class="relative z-0 w-full mb-5">
                    <input type="text" name="nombre" value="{{ $prod->nombre }}"
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                    {{-- <label for="nombre" class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Nombre del
                        Producto:</label> --}}

                </div>
                <div class="relative z-0 w-full mb-5">
                    <input type="text" name="descripcion" value="{{ $prod->descripcion }}"
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                    {{-- <label for="descripcion"
                        class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Descripcion:</label> --}}

                </div>

                <div class="relative z-0 w-full mb-5">
                    <input type="text" name="categoria" value="{{ $prod->categoria }}"
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                    {{-- <label for="categoria"
                        class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Categoria:</label> --}}

                </div>

                <div class="flex flex-row space-x-4">
                    <div class="relative z-0 w-full mb-5">
                        <input type="number" name="cantida" value="{{ $prod->cantida }}"
                            class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        {{-- <label for="cantida"
                            class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">Cantidad</label> --}}

                    </div>
                    <div class="relative z-0 w-full">
                        <input type="number" name="precio" value="{{ $prod->precio }}"
                            class="pt-3 pb-2 pl-5 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-black border-gray-200" />
                        <div class="absolute top-0 left-0 mt-3 ml-1 text-gray-400">Bs</div>
                        {{-- <label for="precio"
                            class="absolute duration-300 top-3 left-5 -z-1 origin-0 text-gray-500">->Monto:</label> --}}

                    </div>
                </div>

                {{-- <div class="relative z-0 w-full mb-5">
                    <select name="id_categoria"
                        class="pt-3 pb-2 block w-full px-0 mt-0 bg-transparent border-0 border-b-2 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black border-gray-200">
                        <option selected disabled hidden>CATEGORIAS:</option>
                        @foreach ($categoria as $produ)
                            <option value="{{ $produ->id }}">{{ $produ->nombre }}</option>
                        @endforeach
                    </select>
                    <label for="id_categoria"
                        class="absolute duration-300 top-3 -z-1 origin-0 text-gray-500">CATEGORIAS</label>

                </div> --}}

                <button id="button" type="submit"
                    class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-blue-500 hover:bg-pink-600 hover:shadow-lg focus:outline-none">
                    ATUALIZAR PRODUCTO
                </button>
            </form>
            <br>
            <button
                class="middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-light="true">
                <a href="{{ route('producto.index') }}">CANCELAR</a>

            </button>
        </div>

    </div>


    <script>
        'use strict'

        document.getElementById('button').addEventListener('click', toggleError)
        const errMessages = document.querySelectorAll('#error')

        function toggleError() {
            // Show error message
            errMessages.forEach((el) => {
                el.classList.toggle('hidden')
            })

            // Highlight input and label with red
            const allBorders = document.querySelectorAll('.border-gray-200')
            const allTexts = document.querySelectorAll('.text-gray-500')
            allBorders.forEach((el) => {
                el.classList.toggle('border-red-600')
            })
            allTexts.forEach((el) => {
                el.classList.toggle('text-red-600')
            })
        }
    </script>
@endsection
