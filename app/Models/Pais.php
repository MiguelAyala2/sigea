<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = "pais";

    protected $fillable = ['pais_cod','pais_descripcion', 'pais_gentilicio', 'pais_siglas', 'nacion_cod', 'suc_razonsocial'];

    // relacion uno a muchos
    public function nacion()
    {
        return $this->belongsTo(Nacionalidad::class, 'nacion_cod');
    }

    // relacion uno a muchos inversa
    public function ciudades()
    {
        return $this->hasMany(Ciudad::class);
    }
}
