<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', function() {return view('home');});

    // RUTAS DE EQUIPOS
    Route::get('/equipos/altaequipo', function() {return view('equipos.altaequipo');});
    Route::post('/equipos/carga_equipo', 'EquipoControlador@postAltaEquipo');
    
    //  RUTA EMPLEADO
    Route::get('/funcionarios/cambiar_contraseña', function() {return view('funcionarios.cambiar_contraseña');});
    Route::post('/funcionarios/update_password', 'FuncionariosControlador@postUpdatePassword');
    // RUTA DE CLIENTE
    Route::get('/clientes/altacliente', function() {return view('clientes.altacliente');});
    Route::post('/clientes/carga_cliente', 'ClienteControlador@postAltaCliente');

    
    //BUSQUEDA DINAMICA CIUDAD
    Route::post('/ciudad/getAutocomplete/','CiudadControlador@postAutocomplete')->name('Autocomplete.ciudad');
    //BUSQUEDA DINAMICA EQUIPO
    Route::post('/equipo/getAutocomplete/','EquipoControlador@postAutocomplete')->name('Autocomplete.equipo');
   


    
});

