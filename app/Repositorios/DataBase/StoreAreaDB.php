<?php

namespace App\Repositorios\DataBase;

use App\Models\Area;

class StoreAreaDB
{
    public function create($request){
        $area = Area::create([
            'id'            => $request->id,
            'nombre'        => $request->nombre,
        ]);
        return $area;    
    }
}