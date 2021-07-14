<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpleado;
use App\Http\Resources\EmpleadoResource;
use App\Http\Resources\EmpleadoCollection;
use App\Repositorios\DataBase\StoreEmpleadoDB;

class EmpleadoController extends Controller
{

    protected $storeDBEmpleado;

    public function __construct(StoreEmpleadoDB $storeEmpleadoDB){
        $this->storeDBEmpleado = $storeEmpleadoDB;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EmpleadoResource::collection(Empleado::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpleado $request)
    {
        $empleado = $this->storeDBEmpleado->create($request);
        return EmpleadoResource::make($empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return EmpleadoResource::make($empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return EmpleadoResource::make($empleado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return EmpleadoResource::collection(Empleado::all());
    }
}
