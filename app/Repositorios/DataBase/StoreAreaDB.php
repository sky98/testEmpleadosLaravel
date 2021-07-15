<?php

namespace App\Repositorios\DataBase;

use App\Models\Area;

class StoreAreaDB
{
    public function create($request){
        $area = Area::create([
            'nombre'        => $request->nombre,
        ]);
        return $area;    
    }
}