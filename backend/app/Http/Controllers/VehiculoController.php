<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response ()->json(App\Models\Vehiculo::all(),200);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $f = App\Models\Vehiculo::find($id);

        if(!$f){
            return response ()->json(['error'=>'VEHICULO NO ENCONTRADO','codigo'=>202]);
        }
        else{
            
            return response ()->json($f,200);
        }
    }


    public function edit($id)
    {
        //
    }

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
