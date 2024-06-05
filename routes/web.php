<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProController;
use App\Http\Controllers\ProductoController;

Route::get('/', homeController::class);



// route::get('principal', [ProController::class, 'principal']);

// route::get('crear', [ProController::class, 'crear']);

// route::get('mostrar/{variable}', [ProController::class, 'mostrar']);

route::controller(ProductoController::class)->group(function(){

    route::get('producto/{variable}', 'show')->name('producto.show');
    route::get('productos/create', 'create')->name('producto.create');
    route::get('productos/index', 'index')->name('producto.index');
    route::post('producto','store')->name('producto.store');
    route::get('producto/{id}/edit', 'edit')->name('producto.edit');
    route::put('producto/{id}', 'update')->name('producto.update');
    route::delete('producto/{id}', 'destroy')->name('producto.destroy');

});


// route::get('mensaje', function(){
//     return "este es un mensaje";
// });


// route::get('producto/crear', function(){
//     return "este es un  men 2";
// });

// route::get('pro/{variable}', function($variable){
//     return "este es: $variable";
// });

// route::get('pro2/{variable1}/{variable2}', function($variable1, $variable2){
//     return "este es: 1 $variable1 y este 2 $variable2";
// });

// route::get('pro3/{variable1}/{variable2?}', function($variable1, $variable2=null){

//     if($variable2)
//     {return "ingreso 2 productos: 1 $variable1 y este 2 $variable2";}
//     else
//     {return "solo ingreso un producto: $variable1";}
// });
