<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
     // se habla la tabla a utilizar
     protected $table='tipos';
     // se define la llave primaria
     protected $primaryKey='id_tipo';
     //se especifican relaciones
     //public $with=['Tipo','Id_proveedor'];
 
     public $incrementing=false;
     public $timestamps=false;
     protected $fillable=[
         'tipo'
     ];
}
