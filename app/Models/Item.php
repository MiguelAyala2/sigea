<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "items";

    protected $primaryKey = 'item_cod';

    protected $fillable = ['tip_items_cod', 'tip_imp_cod', 'item_descrip', 'item_precio', 'estado'];

}
