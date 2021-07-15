<?php

namespace App\Repositorios\DataBase;

use Illuminate\Support\Facades\DB;

class StoreEmpleadoRolDB
{
    public function create($empleado, $rol){
        DB::table('empleado_rol')->insert(
            array(
                'empleado_id'   => $empleado->id, 
                'rol_id'        => $rol
                )
        );
    }
}