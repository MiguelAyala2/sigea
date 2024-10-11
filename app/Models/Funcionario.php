<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = "funcionario";

    protected $primaryKey = 'fun_cod';

    protected $fillable = ['fun_nom', 'fun_telef', 'fun_correo', 'fun_direccion'];

    public function pedCompCab()
    {
        return $this->hasMany(PedidoCompCab::class);
    }
}
