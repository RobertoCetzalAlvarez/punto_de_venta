<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
   // use HasFactory;
   // se habla la tabla a utilizar
   protected $table='ventas';
   // se define la llave primaria
   protected $primaryKey='folio';
   //se especifican relaciones
   //public $with=['Tipo','Id_proveedor'];

   public $incrementing=false;
   public $timestamps=false;
   protected $fillable=[
       'fecha_venta',
       'num_articulos',
       'subtotal',
       'total',
       'iva'
   ];
}
