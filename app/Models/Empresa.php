<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresa";

    protected $primaryKey = 'emp_cod';

    protected $fillable = ['emp_telef', 'emp_direccion', 'emp_correo', 'emp_razon_social'];

    public function sucursales()
    {
        return $this->hasMany(Sucursal::class);
    }

    public function pedCompCab()
    {
        return $this->hasMany(PedidoCompCab::class);
    }
}
