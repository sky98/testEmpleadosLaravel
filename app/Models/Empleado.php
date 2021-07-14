<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{

    protected $table = "empleados";

    protected $fillable = [
        'id', 'nombre', 'email', 'sexo', 'area_id', 'boletin', 'descripcion'
    ];

    public function areas()
    {
        return $this->hasMany('App\Models\Area');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Rol');
    }
}
