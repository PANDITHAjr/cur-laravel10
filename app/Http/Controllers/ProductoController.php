<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function principal()
    {
        return view('productos.principal');
    }

    public function crear()
    {
        return view('productos.crear');
    }

    public function mostrar($variable){
        return view('productos.mostrar',compact('variable'));
    }
}
