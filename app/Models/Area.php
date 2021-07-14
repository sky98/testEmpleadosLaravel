<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = "areas";

    protected $fillable = [
        'id', 'nombre'
    ];

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado');
    }

}
