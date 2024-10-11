<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoCompDet extends Model
{
    use HasFactory;

    protected $table = "pedido_comp_det";

    protected $primaryKey = ['ped_com_cod', 'item_cod'];

    protected $fillable = ['ped_com_cod', 'item_cod', 'ped_com_cantidad', 'ped_com_precio'];

    public $incrementing = false;
}
