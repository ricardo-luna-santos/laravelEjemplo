<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\Vendedor;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/inicio', function () {
//    return view('inicio');
//});
Route::get('/inicio','App\Http\Controllers\PaginasController@inicio');
Route::get('/quienesSomos','App\Http\Controllers\PaginasController@quienesSomos');
Route::get('/dondeEstamos','App\Http\Controllers\PaginasController@dondeEstamos');
/*
Route::get('/insertar',function(){
    DB::insert("INSERT INTO clientes (nombre,apellidos,direccion)VALUES(?,?,?)"
    ,["Ramiro","Aldana Santos","Calle ilusión Casa 1"]);
});

Route::get('/leer',function(){
    $resultados=DB::select("SELECT * FROM clientes WHERE id=?",[1]);
    foreach($resultados as $cliente){
        return $cliente->nombre;
    }
});

Route::get('/actualizar',function(){
    DB::update("UPDATE clientes SET direccion='Calle 3 de Mayo No 104. Col.Vista Hermosa, Xicotepec, Puebla, México' WHERE id=?",[1]);
});

Route::get('/eliminar',function(){
    DB::delete("DELETE FROM clientes WHERE id=?",[3]);
});

Route::get('/consultar',function(){
    $cliente=Cliente::all();
    foreach($cliente as $clientes){
        echo "Nombre: ".$clientes->nombre." Apellidos: ".$clientes->apellidos." Dirección: ".$clientes->direccion."<br>";
        }      
});
Route::get("/consultacomodin",function(){
    $cliente=Cliente::where("nombre","Juan")->get();
    return $cliente;
    });
Route::get("/consultacomodin2",function(){
    $cliente=Cliente::where("nombre","Heriberto")->orderBy("apellidos","asc")->get();
        return $cliente;
    });  
Route::get("/consultacomodin2",function(){
    $cliente=Cliente::where("nombre","Heriberto")->orderBy("apellidos","asc")->get();
    return $cliente;
    });
Route::get("/insertar",function(){
       $cliente=new Cliente;
       $cliente->nombre="Roberto";
        $cliente->apellidos="Juarez Carmona";
        $cliente->direccion="Calle ilusión Casa 1";

       $cliente->save();
    });
Route::get("/actualizar",function(){
    $cliente=Cliente::find(1);
    //campos que se necesitan modificar
    $cliente->nombre="Roberto";
    $cliente->apellidos="Juarez Carmona";
    $cliente->direccion="Calle ilusión Casa 1";
        
    $cliente->save();
});
Route::get("/actualizar0",function(){
        Cliente::where ("nombre","Ramiro")->update (["nombre"=>"Ramirito"]);
    });
Route::get("/actualizar1",function(){
        Cliente::where ("direccion","Calle ilusión Casa 1")->where("nombre","Heriberto")->update (["direccion"=>"Av. UTXJ No 1000"]);
    });
Route::get("/borrar",function(){
        $cliente=Cliente::find (8);
        $cliente->delete();
    });*/
    //Relacion Uno a Uno
Route::get("/cliente/{id}/pedido", function($id){
        return Cliente::find($id)->Pedido;
    });
    //Relacion Uno a Uno de Reversa
Route::get("/pedido/{id}/cliente", function($id){
    return Pedido::find($id)->Cliente->nombre;
});
//Relacion Uno a Muchos
Route::get("/pedidosclientes",function(){
    $verpedidos=Cliente::find(1)->verPedidos;
    foreach($verpedidos as $pedidos){
        echo $pedidos->estadopedido."<br>";
    }
});
//Relacion Uno a Uno
Route::get("/vendedor/{id}/pedido", function($id){
    return Vendedor::find($id)->Pedido;
});
//Relacion Uno a Uno de Reversa
Route::get("/pedido/{id}/vendedor   ", function($id){
    return Pedido::find($id)->Vendedor->nombre;
});
//Relacion Uno a Muchos
Route::get("/pedidosvendedor",function(){
    $verpedidos=Vendedor::find(1)->verPedidos;
    foreach($verpedidos as $pedidos){
        echo $pedidos->estadopedido."<br>";
    }
});
//Relacion Muchos a Muchos
Route::get("/cliente/{id}/productos", function($id){
	$pedido=Pedido::find($id);
	foreach($pedido->Producto as $producto){
		echo $producto->nombre."<br>";
	}
});       
