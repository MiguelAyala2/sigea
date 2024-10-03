<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    use HasFactory;

    protected $table = "nacionalidad";

    protected $fillable = ['nacion_cod','nacion_descrip'];

    // relacion uno a muchos inversa
    public function paises()
    {
        return $this->hasMany(Pais::class);
    }
}
