<x-app-layout>

@section('titulo', 'PRODUCTOS')

@section('contenido')
    <header>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">LISTA DE PRODUCTOS:</h1>
        </div>
    </header>
    <br>
    <div class="container size-7/9 m-auto">

        <button
            class="middle none center rounded-lg bg-blue-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            data-ripple-light="true">
            <a href="{{ route('producto.create') }}">NUEVO REGISTRO</a>

        </button>

        <!-- component -->
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-20">
            <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">NOMBRE</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CANTIDAD</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">PRECIO</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">CATEGORIA</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">DESCRIPCION</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                    </tr>
                </thead>
                @foreach ($producto as $produ)
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        <td class="px-6 py-4">{{ $produ->id }}</td>
                        <td class="px-6 py-4" style="color: red"><a
                                href="{{ route('producto.show', $produ->id) }}">{{ $produ->nombre }} </a></td>
                        <td class="px-6 py-4">{{ $produ->cantida }}</td>
                        <td class="px-6 py-4">{{ $produ->precio }}</td>
                        <td class="px-6 py-4">{{ $produ->categoria }}</td>
                        <td class="px-6 py-4">{{ $produ->descripcion}}</td>
                        <td class="px-6 py-4">

                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">

                                    <button
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded"><a
                                            href="{{ route('producto.show', $produ) }}">Mostrar</a></button>
                                    <button
                                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 border border-yellow-500 rounded">
                                        <a href="{{ route('producto.edit', $produ) }}">Editar</a></button>
                                    <button
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                        <a href="{{ route('producto.destroy', $produ) }}">Eliminar</a></button>


                                </li>
                            </ul>
                        </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
