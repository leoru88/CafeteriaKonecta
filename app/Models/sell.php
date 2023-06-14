<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sell extends Model
{
    protected $table='sell';
    protected $fillable = ['productoId', 'Cantidad', 'precio'];
    
}
