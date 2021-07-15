<?php

namespace App\Repositorios\DataBase;

use App\Models\Empleado;
use App\Repositorios\DataBase\StoreEmpleadoRolDB;

class StoreEmpleadoDB
{
    protected $storeEmpleadoRolDB;

    public function __construct(StoreEmpleadoRolDB $storeEmpleadoRolDB){
        $this->storeEmpleadoRolDB = $storeEmpleadoRolDB;
    } 

    public function create($request){
        $roles = $request->roles;
        $empleado = Empleado::create([
            'nombre'        => $request->nombre,
            'email'         => $request->email,
            'sexo'          => $request->sexo,
            'area_id'       => $request->area_id,
            'boletin'       => $request->boletin,
            'descripcion'   => $request->descripcion,
        ]);
        foreach ($roles as $rol) {
            $this->storeEmpleadoRolDB->create($empleado, $rol);
        }        
        return $empleado;    
    }
}