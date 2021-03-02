<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use App\Models\Fabricante;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fabricante::truncate(); // EVITAR LA DUPLICIDAD DE DATOS
        $fabricante= new Fabricante();
        $fabricante->nombre="FORD";
        $fabricante->telefono="022692352";
        $fabricante->save();

        $fabricante= new Fabricante();
        $fabricante->nombre="MAZDA";
        $fabricante->telefono="022692352";
        $fabricante->save();

        Vehiculo::truncate();
        $vehiculo= new Vehiculo();
        $vehiculo->cilindraje=25.6;
        $vehiculo->color="blanco";
        $vehiculo->potencia="1000";
        $vehiculo->peso=56.5;
        $vehiculo->fabricante_id=1;
        $vehiculo->save();

        $vehiculo= new Vehiculo();
        $vehiculo->cilindraje=52.6;
        $vehiculo->color="amarillo";
        $vehiculo->potencia="2000";
        $vehiculo->peso=12.5;
        $vehiculo->fabricante_id=2;
        $vehiculo->save();

        $vehiculo= new Vehiculo();
        $vehiculo->cilindraje=45.6;
        $vehiculo->color="rojo";
        $vehiculo->potencia="457";
        $vehiculo->peso=88.5;
        $vehiculo->fabricante_id=1;
        $vehiculo->save();
    }
}
