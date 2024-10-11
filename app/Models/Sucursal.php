<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = "sucursal";

    protected $primaryKey = 'suc_cod';

    protected $fillable = ['suc_telef', 'suc_direccion', 'suc_correo', 'suc_razon_social', 'emp_cod'];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'emp_cod');
    }

    public function pedCompCab()
    {
        return $this->hasMany(PedidoCompCab::class);
    }
}
