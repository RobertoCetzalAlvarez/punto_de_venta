<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // se habla la tabla a utilizar
    protected $table='productos';
    // se define la llave primaria
    protected $primaryKey='id_producto';
    //se especifican relaciones
    //public $with=['Tipo','Id_proveedor'];

    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
        'Nombre',
        'Precio-venta',
        'Precio-compra',
        'Tipo',
        'Id_proveedor'
    ];
    /*public function tipo(){

        return $this->belongsTo(Comida::class,'id_comida','id_comida');

    }*/
}
