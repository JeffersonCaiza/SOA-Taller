<?php

namespace App\Http\Controllers;
use App\Models;

use Illuminate\Http\Request;

class FabricanteVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $fabricante = App\Models\Fabricante::find($id);
        
       

        if(!$fabricante){
            return response ()->json(['error'=>'NO SE ENCUENTRA EL FABRICANTE','codigo'=>404]);
        }
        else{
            $v = $fabricante->vehiculo;
            return response ()->json($v,200);
        }

    }


    public function create()
    {
        //
    }


    public function store(Request $request,$id)
    {
        
        $fabricante = App\Models\Fabricante::find($id);
        if(!$fabricante){
            return response ()->json(['ERROR'=>'FABRICANTE NO EXISTE','codigo'=>400]);
        }
        else {
            $newvehiculo= new App\Models\Vehiculo;
            $newvehiculo->cilindraje=$request->cilindraje;
            $newvehiculo->color=$request->color;
            $newvehiculo->potencia=$request->potencia;
            $newvehiculo->peso=$request->peso;
            $newvehiculo->fabricante_id=$id;
            $newvehiculo->save();
            return response ()->json(['OK'=>'VEHICULO CREADO','codigo'=>200]);
        }



        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
