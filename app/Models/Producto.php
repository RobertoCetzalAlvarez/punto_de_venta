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
    public $with=['Tipo','Id_provedor'];

    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
        'Nombre',
        'Precio-venta',
        'Precio-compra',
        'Tipo',
        'Id_provedor'
    ];
    public function tipo(){

        return $this->belongsTo(Tipo::class,'Tipo','id_tipo');

    }
   public function id_provedor(){

        return $this->belongsTo(Provedor::class,'Id_provedor','Id_provedor');

    }
}
