<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller

{
    public function index()
    {
        // $producto= Producto::paginate(5);
        $producto= Producto::all();
        // return $producto;
        return view('productos.index', ['prod'=>$producto]);
    }

    public function create()
    {
        return view('productos.create');
    }
    public function edit($id)
    {
        $pro=Producto::find($id);
        return view('productos.edit', compact('pro'));
    }

    public function update(Request $request, $id)
    {
        $pro=Producto::find($id);
        $pro->nombre=$request->nombre;
        $pro->precio=$request->precio;
        $pro->descripcion=$request->descripcion;
        $pro->categoria=$request->categoria;
        $pro->cantida=$request->cantida;
        return redirect()->route('producto.index');
    }

    public function show($variable){

        $producto=Producto::find($variable);
        // return $producto;
        // return view('productos.mostrar',compact('variable'));
        return view('productos.show', compact('producto'));
    }
    public function store(Request$request){

        $pro=new producto();
        $pro->nombre=$request->nombre;
        $pro->precio=$request->precio;
        $pro->descripcion=$request->descripcion;
        $pro->categoria=$request->categoria;
        $pro->cantida=$request->cantida;

        //return $request->all();

        $pro->save();
        return redirect()->route('producto.show', $pro->id);
    }
    public function destroy($id)
    {
        $pro=Producto::find($id);
        $pro->delete();
        return redirect()->route('producto.index');
    }
}
