<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    //devolver los pedidos que pertenecen a este cliente
    public function Pedido(){
        return $this->hasOne("App\Models\Pedido");
    }
    public function verPedidos(){
        return $this->hasMany("App\Models\Pedido");
    }
    public function VerProductos(){
        return $this->belongsToMany("App\Models\Pedido_Producto");
    }
    
    Protected $fillable=["nombre","primer_apellid","segundo_apellido"];

    use HasFactory;
}
