<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
   // use HasFactory;
    // se habla la tabla a utilizar
    protected $table='provedores';
    // se define la llave primaria
    protected $primaryKey='Id_provedor';
    //se especifican relaciones
    //public $with=['Tipo','Id_proveedor'];

    public $incrementing=false;
    public $timestamps=false;
    protected $fillable=[
        'Empresa',
        'Correo',
        'Telefono'

    ];
}
