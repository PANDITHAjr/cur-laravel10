<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller

{
    public function principal()
    {
        $producto= Producto::paginate(5);
        // return $producto;
        return view('productos.principal', ['prod'=>$producto]);
    }

    public function crear()
    {
        return view('productos.crear');
    }

    public function mostrar($variable){

        $producto=Producto::find($variable);
        // return $producto;
        // return view('productos.mostrar',compact('variable'));
        return view('productos.mostrar', compact('producto'));
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
        return redirect()->route('producto.mostrar', $pro->id);
    }
}
