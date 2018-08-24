<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table='promociones';



public function paquete()

    {
        return $this->hasMany('App\Paquete');
    }


}
