<?php

namespace App\Http\Resources;

use App\Http\Resources\RolResource;
use App\Http\Resources\AreaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpleadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'            => $this->id,         
            'nombre'        => $this->nombre,
            'email'         => $this->email,
            'sexo'          => $this->sexo,
            'area'          => $this->area->nombre,
            'area_id'       => $this->area->id,
            'boletin'       => $this->boletin,
            'descripcion'   => $this->descripcion,
            'roles'         => $this->roles,
        ];
    }
}
