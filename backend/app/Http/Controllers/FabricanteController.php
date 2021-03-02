<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response ()->json(App\Models\Fabricante::all(),200);
    }

   public function store(Request $request)
    {
        $nuevofabricante = new App\Models\Fabricante;
        $nuevofabricante->nombre = $request->nombre;
        $nuevofabricante->telefono = $request->telefono;
        $nuevofabricante->save();
        return response ()->json(['OK'=>'FABRICANTE CREADO','codigo'=>200]);
    }

    public function show($id)
    {
        $f = App\Models\Fabricante::find($id);

        if(!$f){
            return response ()->json(['error'=>'FABRICANTE NO ENCONTRADO','codigo'=>202]);
        }
        else{
            
            return response ()->json($f,200);
        }
       
        
    }


    public function edit($id)
    {
        return "MOSTRANDO EL FORMULARIO PARA EDITAR EL FABRICANTE CON EL ID $id";
    }


    public function update(Request $request, $id)
    {
        $nombreMetodo= $request-> method();

        if($nombreMetodo==='PUT'){

            $FabricanteActualizado = App\Models\Fabricante::find($id);

        if(!$FabricanteActualizado){
            return response ()->json(['error'=>'FABRICANTE NO ENCONTRADO','codigo'=>404]);
        }
        else{
            
            
            $FabricanteActualizado->nombre = $request->nombre;
            $FabricanteActualizado->telefono = $request->telefono;
            $FabricanteActualizado->save();
            return response ()->json(['error'=>'FABRICANTE ACTUALIZADO','codigo'=>200]);
        }
        }
        else  {

            
            
        }
        
    }


    public function destroy($id)
    {
        $f = App\Fabricante::find($id);

        if(!$f){
            return response ()->json(['error'=>'FABRICANTE NO ENCONTRADO','codigo'=>202]);
        }
        else{
            $f->delete();
            return response ()->json($f,200);
        }
       
    }
}
