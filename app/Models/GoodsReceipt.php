<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'po_number',
        'material_code',
        'received_quantity',
        'received_date',
        'storage_location',
        'document_number'
    ];
}
