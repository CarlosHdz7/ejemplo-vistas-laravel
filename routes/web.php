<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//llamada vista normal para la raiz
Route::get('/', function () {
    return view('home');
});

//llamada a una vista que no es raiz
Route::get('saludo',function(){
    return view('saludo');
});

//llamada a una vista pasandole un parametro
Route::get('parametro/{nombre?}',function($nombre = 'invitado'){
    return view('parametro',['nombre'=>$nombre]);
})->where('nombre','[A-Za-z]+');

//llamada a una vista pasandole un parametro de una segunda forma
Route::get('parametro/{nombre?}',function($nombre = 'invitado'){
    return view('parametro')->with(['nombre' => $nombre]);
})->where('nombre','[A-Za-z]+');

//llamada a una vista pasandole un parametro de una tercera forma
//Areglo asociativo, solo se le pasa un parametro en este caso nombre
//devolvera el equivalente a esto 'nombre' =>  $nombre
//siempre y cuando la variable se llame nombre
Route::get('parametro/{nombre?}',function($nombre = 'invitado'){
    return view('parametro',compact('nombre'));
})->where('nombre','[A-Za-z]+');