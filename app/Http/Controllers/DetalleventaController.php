<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detalleventa;
use DB;

class DetalleventaController extends Controller
{
    public function index()
    {
        //
        return $detalles=Detalleventa::all();
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
