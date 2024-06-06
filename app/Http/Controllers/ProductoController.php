<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller

{
    public function index()
    {
        // $producto= Producto::paginate(5);
        $producto = Producto::all();
        // return $producto;
        return view('productos.index', ['prod' => $producto]);
    }

    public function create()
    {
        $categoria = Categoria::all();
        return view('productos.create', compact('categoria'));
    }
    public function store(Request $request)
    {

        $pro = new producto();
        $pro->nombre = $request->nombre;
        $pro->precio = $request->precio;
        $pro->descripcion = $request->descripcion;
        $pro->categoria = $request->categoria;
        $pro->cantida = $request->cantida;
        // $pro->id_categoria = $request->input('id_categoria');

        //return $request->all();

        $pro->save();
        return redirect()->route('producto.index', $pro->id);
    }
    public function edit(Producto $prod)
    {
        // $prod=Producto::find($id);
        // return $prod;
        return view('productos.edit', compact('prod'));
    }

    public function update(Request $request, $id)
    {
        $pro = Producto::find($id);
        $pro->nombre = $request->nombre;
        $pro->precio = $request->precio;
        $pro->descripcion = $request->descripcion;
        $pro->categoria = $request->categoria;
        $pro->cantida = $request->cantida;

        $pro->save();

        return redirect()->route('producto.index');
    }

    public function show($variable)
    {

        $producto = Producto::find($variable);
        // return $producto;
        // return view('productos.mostrar',compact('variable'));
        return view('productos.show', compact('producto'));
    }

    public function destroy($id)
    {
        $pro = Producto::find($id);
        $pro->delete();
        return redirect()->route('producto.index');
    }
}
