<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleventa extends Model
{
    //use HasFactory;
    // se habla la tabla a utilizar
    protected $table='detalle_ventas';
    // se define la llave primaria
    protected $primaryKey='id';
    //se especifican relaciones
    //public $with=['Tipo','Id_proveedor'];
    public $with=['Id_producto','folio'];
    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
        'cantidad',
        'precio',
        'total',
        'Id_producto',
        'folio'
    ];
    public function id_producto(){

        return $this->belongsTo(Producto::class,'Id_producto','Id_producto');

    }
    public function folio(){

        return $this->belongsTo(Venta::class,'folio','folio');

    }
}
