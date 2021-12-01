<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Illuminate\Http\Request;

class personaController extends Controller
{
    public function insertarPersona(Request $request)
    {
        $persona=persona::create([
        'nombre' => $request->nombre,
        'telefono'=>$request->telefono,
        'correo'=>$request->correo,
        'id_puesto'=>$request->puesto,
        'id_departamento'=>$request->departamento
    ]);
    return $persona;
    }
    public function actualizarPersona(Request $request,$id)
    {
        $persona=persona::find($id);
        $persona->nombre=$request->nombre;
        $persona->telefono=$request->telefono;
       $persona->save();
       return $persona;
    }
    public function eliminarPersona($id)
    {
        $persona=persona::find($id);
        $persona->delete();
        return $persona();
    }
    public function tabla()
    {
        $persona=persona::all();
        return $persona;
    }
}
