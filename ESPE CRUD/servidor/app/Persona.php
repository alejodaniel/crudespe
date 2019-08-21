<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'telefono',
        'direccion',
        'email',
        'password'
    ];
    public function roles()
    {
        return $this->hasOne('App\Rol');
    }
    public function facturas()
    {
        return $this->belongsTo('App\Factura');
    }
}
