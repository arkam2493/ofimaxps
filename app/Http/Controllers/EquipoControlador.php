<?php

namespace App\Http\Controllers;

use App\Equipos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class EquipoControlador extends Controller
{
    public function postAltaEquipo(Request $request)
    { 
        
        $equipo = new Equipos();
        $equipo->marca = $request->marca;
        $equipo->modelo = $request->modelo;
        $equipo->nro_serie = $request->nro_serie;
        $equipo->save();                                   

        return view('/equipos/altaequipo')->with('msj','Se registro un equipo con Numero de serie. '.$request->nro_serie);
    }
    public function postAutocomplete(Request $request){

        $search = $request->search;
  
        if($search == ''){
           $equipo = Equipos::orderby('nro_serie','asc')->select('modelo','nro_serie')->limit(5)->get();
        }else{
           $equipo = Equipos::orderby('nro_serie','asc')->select('modelo','nro_serie')->where('nro_serie', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($equipo as $equipo){
           $response[] = array("label"=>$equipo->modelo,"value"=>$equipo->nro_serie);
        }
  
        return response()->json($response);
     }
    
}
