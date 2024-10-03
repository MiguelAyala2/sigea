<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = "ciudad";

    protected $fillable = ['ciu_cod','pais_cod', 'ciu_descrip'];

    // relacion uno a muchos
    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais_cod');
    }
}
