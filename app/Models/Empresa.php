<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empresa";

    protected $fillable = ['emp_cod', 'emp_direcc', 'emp_correo', 'emp_telefono', 'emp_razonsocial'];
}
