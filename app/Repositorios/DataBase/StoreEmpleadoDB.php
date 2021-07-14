<?php

namespace App\Repositorios\DataBase;

use App\Models\Empleado;

class StoreEmpleadoDB
{
    public function create($request){
        $empleado = Empleado::create([
            'nombre'        => $request->nombre,
            'email'         => $request->email,
            'sexo'          => $request->sexo,
            'area_id'       => $request->area_id,
            'boletin'       => $request->boletin,
            'descripcion'   => $request->descripcion,
        ]);
        return $empleado;    
    }
}