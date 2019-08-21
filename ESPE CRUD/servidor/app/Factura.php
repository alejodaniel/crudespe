<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
    public function clientes()
    {
        return $this->hasOne('App\Persona');
    }
    public function detalles()
    {
        return $this->belongsToMany('App\Detalle');
    }
}
