<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRol;
use App\Http\Resources\RolResource;
use App\Http\Resources\RolCollection;
use App\Repositorios\DataBase\StoreRolDB;

class RolController extends Controller
{

    protected $storeDBRol;

    public function __construct(StoreRolDB $storeRolDB){
        $this->storeDBRol = $storeRolDB;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RolResource::collection(Rol::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRol $request)
    {
        $rol = $this->storeDBRol->create($request);
        return RolResource::make($rol);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $role)
    {
        return RolResource::make($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rol $role)
    {
        $role->update($request->all());
        return RolResource::make($role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rol  $rol
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rol $role)
    {
        $role->delete();
        return RolResource::collection(Rol::all());
    }
}
