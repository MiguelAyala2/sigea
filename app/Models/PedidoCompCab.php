<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoCompCab extends Model
{
    use HasFactory;

    protected $table = "pedido_comp_cab";

    protected $primaryKey = 'ped_com_cod';

    protected $fillable = ['suc_cod', 'emp_cod', 'ped_com_fecha', 'ped_com_estado', 'fun_cod'];

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'suc_cod');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'emp_cod');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'fun_cod');
    }
}
