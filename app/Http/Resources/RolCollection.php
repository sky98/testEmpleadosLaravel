<?php

namespace App\Http\Resources;

use App\Http\Resources\RolResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RolCollection extends ResourceCollection
{
    public $collects = RolResource::class;
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
