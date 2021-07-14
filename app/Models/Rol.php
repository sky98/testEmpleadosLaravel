<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rols";

    protected $fillable = [
        'id', 'nombre'
    ];

    public function empleados()
    {
        return $this->belongsToMany('App\Models\Empleado');
    }
}
