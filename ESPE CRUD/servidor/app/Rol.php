<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'descripcion'
    ];
    public function personas()
    {
        return $this->belongsTo('App\Persona');
    }
}
