<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = "proveedor";

    protected $primaryKey = 'prov_cod';

    protected $fillable = ['prov_razon', 'prov_ruc', 'prov_direc', 'prov_telef', 'prov_correo'];
}
