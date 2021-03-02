<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    public function  vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }

    protected $hidden=['created_at','updated_at'];
}
