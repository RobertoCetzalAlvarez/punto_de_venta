<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $producto=Producto::all();
        
    }
    public function store(Request $request)
    {
        //
        $producto= new Producto();
        $producto->Nombre=$request->get('Nombre');
        $producto->Precio_venta=$request->get('Precio_venta');
        $producto->Precio_compra=$request->get('Precio_compra');
        $producto->Tipo=$request->get('Tipo');
        $producto->Id_proveedor=$request->get('Id_proveedor');

        $producto->save();
    }
    public function show($id)
    {
        //
        return $producto=Producto::find();
    }
    public function update(Request $request, $id)
    {
        //
        $producto = Producto::find($id);
        $producto->Nombre=$request->get('Nombre');
        $producto->Precio_venta=$request->get('Precio_venta');
        $producto->Precio_compra=$request->get('Precio_compra');
        $producto->Tipo=$request->get('Tipo');
        $producto->Id_proveedor=$request->get('Id_proveedor');
        $producto->update();
    }
    public function destroy($id)
    {
        //
        $producto=Producto::find($id);

        $producto->delete();
    }
}
