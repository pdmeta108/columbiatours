<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class paquete extends Model {

    protected $table='paquetes';


public function categoria()

{
    return $this->belongsTo('App\Categoria');
}

}