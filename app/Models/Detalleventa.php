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
    //public $with=['Tipo','Id_provedor'];
    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
        'Id_producto',
        'cantidad',
        'precio',
        'total',
        'folio'
    ];
}
