<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProController;

Route::get('/', homeController::class);



// route::get('principal', [ProController::class, 'principal']);

// route::get('crear', [ProController::class, 'crear']);

// route::get('mostrar/{variable}', [ProController::class, 'mostrar']);

route::controller(ProController::class)->group(function(){

    route::get('mostrar/{variable}', 'mostrar');
    route::get('crear', 'crear');
    route::get('principal', 'principal');

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
