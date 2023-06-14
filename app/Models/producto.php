<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='inventario';
    protected $primaryKey = 'productoId'; // Nombre de la columna que sirve como clave primaria
    protected $fillable = ['productoId','Nombre_producto', 'Referencia', 'precio', 'Peso', 'Categoria', 'Stock'];
    public $timestamps = false; // Indica si la tabla tiene timestamps (created_at y updated_at)


}
