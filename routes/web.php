<?php

use Illuminate\Support\Facades\Route;
use App\Models\Clientes;
use App\Models\Vehiculos;
use App\Models\Trabajadores;

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

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/cliente', [App\Http\Controllers\HomeController::class, 'rcliente'])->name('cliente');
//Route::get('/clientes', [App\Http\Controllers\Cliente::class, 'index'])->name('listcliente');

Route::get('/trabajadores', [App\Http\Controllers\Trabajador::class, 'index'])->name('listtrabajador');

Route::get('/Servicios', [App\Http\Controllers\Servicios::class, 'index'])->name('listServicios');

Route::get('/Vehiculos', [App\Http\Controllers\Vehiculos::class, 'index'])->name('listVehiculos');

Route::get('/Ventas', [App\Http\Controllers\Ventas::class, 'index'])->name('listVentas');




/*Route::get('/clientes',function(){
    $cliente= Clientes::all();
    foreach($cliente as $clientes){       
        echo "Nombre: ".$clientes->nombre." Apellidos:"
        .$clientes->apaterno." ".$clientes->amaterno." Dirección: "
        .$clientes->direccion."<br>";
    }
}); */

