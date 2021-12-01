<?php

namespace App\Http\Controllers;

use App\Models\puesto;
use Illuminate\Http\Request;

class puestoController extends Controller
{
    public function insertarPuesto(Request $request)
    {
      $puesto=puesto::create([
      'nom_puesto'=>$request->puesto

     
    ]);
    return $puesto;
    }
    public function actualizarPuesto(Request $request,$id)
    {
       $puesto=puesto::find($id);
       $puesto->nom_puesto=$request->puesto;
       $puesto->save();
       return $puesto;
    }
    public function eliminarPuesto($id)
    {
        $puesto=puesto::find($id);
        $puesto->delete();
        return $puesto;
    }
    public function consulta1()
    {
       $puesto=puesto::all();
       return $puesto;
    }
}
