<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImpuesto extends Model
{
    use HasFactory;

    protected $table = "tipo_impuesto";

    protected $primaryKey = 'tip_imp_cod';

    protected $fillable = ['tip_imp_nom', 'tip_imp_tasa'];
}
