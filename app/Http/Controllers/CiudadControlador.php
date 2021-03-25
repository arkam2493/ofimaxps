<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudads;

class CiudadControlador extends Controller
{
    public function postAutocomplete(Request $request){

        $search = $request->search;
  
        if($search == ''){
           $ciudad = Ciudads::orderby('ciu_descripcion','asc')->select('ciu_descripcion')->limit(5)->get();
        }else{
           $ciudad = Ciudads::orderby('ciu_descripcion','asc')->select('ciu_descripcion')->where('ciu_descripcion', 'like', '%' .$search . '%')->limit(5)->get();
        }
  
        $response = array();
        foreach($ciudad as $ciudad){
           $response[] = array("value"=>$ciudad->ciu_descripcion);
        }
  
        return response()->json($response);
     }
}
