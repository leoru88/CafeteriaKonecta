<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\DB;



class productosController extends Controller
{
    public function index() 
    {
        $productos = producto::all();
        return view('admin.producto.index', ['productos'=>$productos]);
    }

    public function create()
    {
        return view('admin.producto.create');
    }

    public function store(Request $request)
    {        
        producto::create($request->all());
        return redirect()->back()->with('success', 'El producto ha sido registrado correctamente!');
    }

    
    
    public function edit()
    {
        $productos = producto::all();
        return view('admin.producto.index', ['productos' => $productos]);

    }
    


    public function update(Request $request, $productoId)
    {
        $producto = producto::findOrFail($productoId);

        $producto->Nombre_producto = $request->Nombre_producto;
        $producto->Referencia      = $request->Referencia;
        $producto->precio          = $request->precio;
        $producto->Peso            = $request->Peso;
        $producto->Categoria       = $request->Categoria;
        $producto->Stock           = $request->Stock;
        
        $producto->save();

        return redirect()->route('admin.producto.index')->with('success', 'Producto actualizado correctamente');
    }

   
    public function destroy($productoId)
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $producto = Producto::findOrFail($productoId);
        $producto->delete();
    
        return redirect()->route('admin.producto.index')->with('success', 'Producto eliminado correctamente');

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


    }
    

}



// Consultas:

// > Conocer cuál es el producto que más stock tiene.


class UserController extends Controller
{
    public function index()
    {
    
        $results = DB::select('SELECT Nombre_producto, SUM(cantidad) as total_Stock FROM inventario GROUP BY Nombre_producto ORDER BY total_Stock DESC LIMIT 1');
        
        foreach ($results as $result) {
            echo "El producto con más stock es: " . $result->Nombre_producto . " con un total de " . $result->total_Stock . " unidades.";
        }
    
    }
    

// > Conocer cuál es el producto más vendido.
    
    public function show()
    {
        $results = DB::select('SELECT Nombre_producto, SUM(cantidad) as total_vendido FROM inventario GROUP BY Nombre_producto ORDER BY total_vendido DESC LIMIT 1');

        foreach ($results as $result) {
            echo "El producto más vendido es: " . $result->Nombre_producto . " con un total de " . $result->total_vendido . " unidades vendidas.";
        }
        
    }
}