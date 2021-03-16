<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function Cliente(){
        return $this->belongsTo("App\Models\Cliente");
    }
    public function Vendedor(){
        return $this->belongsTo("App\Models\Pedido");
    }
    public function Producto()
    {
        return $this->belongsToMany("App\Models\Producto");
    }
    use HasFactory;
}
