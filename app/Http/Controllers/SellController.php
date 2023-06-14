<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\sell;

class SellController extends Controller
{
public function sell()
{
    $productos = producto::all();
    return view('admin.producto.sell', ['productos'=>$productos]);
}    

public function almacenar(Request $request)
{
    $sell= sell::create([
        'productoId' => $request->productoId,
        'Cantidad' => $request->Cantidad,
        'precio' => $request->precio,
    ]);
  
    return redirect()->back()->with('success', 'La venta ha sido registrada correctamente!');
}

}