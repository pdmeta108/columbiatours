<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class paquete extends Model {

    protected $table='paquetes';
protected $fillable = ['titulo'];

public function categoria() 

{
    return $this->belongsTo('App\Categoria');
}


 public function imagen()

    {
        return $this->hasMany('App\Imagen');
    }



 public function destino() 

{
    return $this->belongsTo('App\Destino');
}

public function promocion() 

{
    return $this->belongsTo('App\Promocion');
}

public function banco() 

{
    return $this->belongsTo('App\Banco');
}

public function proveedor()

{
    return $this->belongsTo('App\Proveedor');
}


}