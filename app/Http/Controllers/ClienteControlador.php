<?php

namespace App\Http\Controllers;

use App\Ciudads;
use App\Equipos;
use App\Clientes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteControlador extends Controller
{
    public function postAltaCliente(Request $request)
    { 
        $searchequipo = $request->serie;
        $searchciudad = $request->ciu_descripcion;
        $cliente = new Clientes();
        $cliente->id_cliente = $request->id_cliente;
        $cliente->cli_nombres = $request->cli_nombres;
        $cliente->cli_apellido = $request->cli_apellido;
        $cliente->cli_direccion = $request->cli_direccion;
        $cliente->cli_telefono = $request->cli_telefono;
        $cliente->cli_email = $request->cli_email; 
        $equipoid = Equipos::select('id_equipo')->where('nro_serie', '=',$searchequipo)->get();
        foreach ($equipoid as $id)
        {
          $equipoid = $id->id_equipo;
         
        }
        $cliente->id_equipo = $equipoid;
        $ciudadid = Ciudads::select('id_ciudad')->where('ciu_descripcion', '=',$searchciudad)->get();
        foreach ($ciudadid as $id)
        {
          $ciudadid = $id->id_ciudad;
        }
        $cliente->id_ciudad = $ciudadid;
        $cliente->save();
        return view('/clientes/altacliente')->with('msj','Se un registro el cliente con Identificador Nro. '.$request->id_cliente);
    }
}