<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $fillable = [
        'precio',
        'cantidad'
    ];
    public function facturas()
    {
        return $this->hasMany('App\Factura');
    }
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
