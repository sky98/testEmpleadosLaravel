<?php

namespace App\Http\Resources;

use App\Http\Resources\EmpleadoResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class EmpleadoCollection extends ResourceCollection
{

    public $collects = EmpleadoResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}
