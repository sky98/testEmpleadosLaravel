<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArea;
use App\Http\Resources\AreaResource;
use App\Http\Resources\AreaCollection;
use App\Repositorios\DataBase\StoreAreaDB;

class AreaController extends Controller
{

    protected $storeDBArea;

    public function __construct(StoreAreaDB $storeAreaDB){
        $this->storeDBArea = $storeAreaDB;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AreaResource::collection(Area::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArea $request)
    {
        $area = $this->storeDBArea->create($request);
        return RolResource::make($area);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return AreaResource::make($area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->update($request->all());
        return AreaResource::make($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    /* public function destroy(Area $area)
    {
        $area->delete();
        return AreaResource::collection(Area::all());
    } */
}
