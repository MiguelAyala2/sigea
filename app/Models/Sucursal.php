<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = "sucursal";

    protected $fillable = ['suc_cod','emp_cod', 'suc_direcc', 'suc_correo', 'suc_telefono', 'suc_razonsocial'];
}
