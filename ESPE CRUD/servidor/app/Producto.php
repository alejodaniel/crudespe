<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'stock'
    ];

    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }
    public function detalles()
    {
        return $this->belongsToMany('App\Detalle');
    }
}
