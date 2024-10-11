<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoItem extends Model
{
    use HasFactory;

    protected $table = "tipo_items";

    protected $primaryKey = 'tip_items_cod';

    protected $fillable = ['tip_item_descrip'];
}
