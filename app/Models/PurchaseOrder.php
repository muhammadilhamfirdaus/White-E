<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    use HasFactory;

    protected $table = 'purchase_orders';

    protected $fillable = [
        'code_material',
        'nama_material',
        'unit_of_measure',
        'quantity',
        'price',
        'vendor',
        'delivery_date',
        'storage_location',
        'qty_open',
    ];
}
