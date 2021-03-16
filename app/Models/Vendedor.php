<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public function Pedido(){
        return $this->hasOne("App\Models\Pedido");
    }
    public function verPedidos(){
        return $this->hasMany("App\Models\Pedido");
    }
    use HasFactory;
}
