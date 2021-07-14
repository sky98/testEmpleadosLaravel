<?php

namespace App\Http\Resources;

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
            'area_id'       => $this->area_id,
            'boletin'       => $this->boletin,
            'descripcion'   => $this->descripcion,
        ];
    }
}
