<?php

namespace App\Repositorios\DataBase;

use App\Models\Rol;

class StoreRolDB
{
    public function create($request){
        $rol = Rol::create([
            'nombre'        => $request->nombre,
        ]);
        return $rol;    
    }
}