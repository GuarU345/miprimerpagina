<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class departamentoController extends Controller
{
    public function insertarDepartamento(Request $request)
    {
        $departamento=departamento::create([
        'departamento'=>$request->departamento
        ]);
       return $departamento;

    }
    public function actualizarDepartamento(Request $request,$id)
    {
      $departamento=departamento::find($id);
      $departamento->departamento=$request->departamento;
      $departamento->save();
      return $departamento;
    }
    public function eliminarDepartamento($id)
    {
        $departamento=departamento::find($id);
        $departamento->delete();
        return $departamento;
    }
    public function consulta2()
    {
        $departamento=departamento::all();
        return $departamento;
    }
}
